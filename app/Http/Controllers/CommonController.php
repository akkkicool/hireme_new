<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;
use App\Models\PasswordReset;

use Redirect;
use Hash;
use Validator;
use Auth;
use Session, View, DB;
use Carbon\Carbon;
use PDF;

class CommonController extends Controller{

    public function __construct(){   
       View::share('slug1', request()->segment(1));
       View::share('slug2', request()->segment(2));
       View::share('slug3', request()->segment(3));
       View::share('slug4', request()->segment(4));
    }


    public function send_mail(){
        $content    =   array("username" => 'Atul', "role" => "User", "url"=>url('/'), "email" => 'atul@getnada.com', "password" => '123456');
        $options    =   [
            "to_name"   => 'Atul',
            "to_email"  =>  'atul@getnada.com',
        ];
        $this->mail_send('admin-new-user-registration',$subject=array(),$content,$options);
        return 'done';
            /* Registration Email Send Work End */    
    }

    public function privacy(){
         return view('front.privacy-policy');
    }

    public function terms(){
        return view('front.terms-conditions');
    }


	public function home(){
        // $user = User::with(['doctor_info','ratings'])->where(['role_id' => 2, 'status' => 1, 'is_deleted'=>0, 'is_approved'=>1])->inRandomOrder()->limit(4)->get();
        // if($user){
        //     foreach($user as $key=>$val){
        //         $doctors[$key]['id'] =  $val->id;
        //         $doctors[$key]['name'] =  ucwords("{$val->first_name} {$val->last_name}");
        //         $doctors[$key]['price'] =  $val->doctor_info->price;
        //         $doctors[$key]['speciality'] =  getSpecialityName($val->doctor_info->speciality)->name;
        //         $doctors[$key]['image'] = $val->image;
        //         $doctors[$key]['ratings'] =  averageRating($val->id);          
        //     }
        // }

       $doctors = array();

       $user= User::with(['doctor_info'])->leftJoin('ratings', function($q){
                    $q->on('doctor_id', '=', 'users.id');
                    $q->where('rate', '>', 0);
                })
                ->selectRaw('users.*, AVG(ratings.rate) AS importance')
                ->where(['users.role_id' => 2, 'users.status' => 1, 'users.is_deleted'=>0, 'users.is_approved'=>1])
                ->groupBy('users.id')
                ->orderBy('importance', 'desc')
                ->take(5)
                ->get();


        if($user){
            foreach($user as $key=>$val){

                $doctors[$key]['id'] =  $val->id;
                $doctors[$key]['name'] =  ucwords("{$val->first_name} {$val->last_name}");
                $doctors[$key]['price'] =  $val->doctor_info ? $val->doctor_info->price : null;
                $doctors[$key]['speciality'] =  $val->doctor_info ? getSpecialityName($val->doctor_info->speciality)->name : null;
                $doctors[$key]['about'] =  $val->doctor_info ? $val->doctor_info->about : null;
                $doctors[$key]['image'] = $val->image;
                $doctors[$key]['ratings'] =  averageRating($val->id);       
            }
        }

        return view('front.home', compact('doctors'));
	}

    public function doctor_details($id=null){
        $doctor = User::with(['doctor_info','ratings'])->where('id', base64_decode($id))->first();

        $doctor->avg_rating = averageRating($doctor->id);

         $schedule = Schedule::where('user_id', base64_decode($id))->whereDate('utc_start_date', '>=', Carbon::now())->get();

        return view('front.doctor-view', compact('doctor','schedule'));
    }

	public function about(){
	    return view('front.about');
	}

	public function departments() {
	    return view('front.departments');
	}

	public function doctors(Request $request) {

        $doctors = array();
        $speciality = Speciality::select('id', DB::raw("CONCAT(name, ' - ', common_name) AS name"))->where('status', 1)->where('is_deleted', 0)->pluck('name', 'id')->toArray();

        $deseage = $request->speciality ? $request->speciality : null;
              

         $users = User::with(['doctor_info'])->where(['role_id' => 2, 'status' => 1, 'is_deleted'=>0, 'is_approved'=>1]);

         if($request->name){
            $users = $users->where(DB::raw("CONCAT(`first_name`, ' ', `last_name`)"), 'LIKE', "%".$request->name."%");
         }

         if($request->speciality){
            $users = $users->whereHas('doctor_info', function ($query) use ($deseage)  {
                              return $query->where('speciality', '=', $deseage);
                          });
         }

         $users = $users->paginate(10);
          
         if($users){
            foreach($users as $key=>$val){

                $doctors[$key]['id'] =  $val->id;
                $doctors[$key]['name'] =  ucwords("{$val->first_name} {$val->last_name}");
                $doctors[$key]['price'] =  $val->doctor_info ? $val->doctor_info->price : null;
                $doctors[$key]['speciality'] =  $val->doctor_info ? getSpecialityName($val->doctor_info->speciality)->name : null;
                $doctors[$key]['about'] =  $val->doctor_info ? $val->doctor_info->about : null;
                $doctors[$key]['image'] = $val->image;
                $doctors[$key]['ratings'] =  averageRating($val->id);       
            }
        } 

	    return view('front.about_doctors', compact('users', 'doctors', 'speciality'));
	}

	public function blog() {
	    return view('front.blog');
	}

	public function contact() {
	    return view('front.contact');
	}

	public function login(Request $request) {

	    if($request->isMethod('post')){

	        $validator = Validator::make($request->all(), [
	            'email' => 'required',
	            'password' => 'required',
	        ]);

	        if ($validator->fails()) {
	            return redirect()->back()->withErrors($validator)->withInput();
	        }
	        $email          =   $request['email'];
	        $password       =   $request['password'];
	        $remember_me    =   $request['remember'] ? true : false;

	        $user_data      =   User::where(["email"=>$email, "status"=>1, "is_deleted"=>0])->whereIn('role_id', [2, 3])->first();
	        if(!empty($user_data)){
	             if(Hash::check($password,$user_data->password)){
	                if($remember_me){
	                    Cookie::queue(Cookie::forever('rememberedAdmin-email', $request['email'] ));
	                    Cookie::queue(Cookie::forever('rememberedAdmin-password', $request['password'] ));
	                    Cookie::queue(Cookie::forever('rememberedAdmin-remember_me', $request['password'] ));
	                }else{
	                    Cookie::queue(Cookie::forget('rememberedAdmin-email' ));
	                    Cookie::queue(Cookie::forget('rememberedAdmin-password' ));
	                    Cookie::queue(Cookie::forget('rememberedAdmin-remember_me' ));
	                }       
	                Auth::attempt(["email"=>$email,"password"=>$password],$remember_me);
	                toastr()->success('Logged in Successfully');

                    if(!Auth::user()->email_verified_at){
                        return redirect()->route("resend_mail");
                    }

                    if(Auth::user()->role_id == 2){
                        return redirect()->route("doctor.profile");
                    }
	                return redirect()->route("patient.profile");
	            }else{
	                return redirect()->back()->withInput()->withErrors( [ "password" => ["Password is incorrect"] ] );
	            }
	        }else{
	            toastr()->error('Email is invalid');
	            return redirect()->back()->withInput();
	        }  
	    }else{ 
            if(Auth::check()){
                $redirect = (Auth::user()->role_id == 2) ? 'doctor.profile' : 'patient.profile';
                return redirect()->route($redirect);
            }
	        return view('front.login');
	    }
	    
	}


	public function register(Request $request) {

        
        if($request->isMethod('post')){
            $messages = [
                'first_name.regex' => "The :attribute may only contain letters, numbers and spaces.",
                'last_name.regex' => "The :attribute may only contain letters, numbers and spaces."
            ];
            $rules = [
                'first_name'        =>  'required|min:3|max:55|regex:/^[a-zA-Z0-9\s]+$/',
                'last_name'         =>  'required|min:3|max:55|regex:/^[a-zA-Z0-9\s]+$/',
                'email'            =>  'required|unique:users|min:6|max:250',
                'password'          =>  'required|min:6|max:16|confirmed',
            ];
            $validator = Validator::make($request->all(),$rules,$messages);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
            /* Emoji Block Work End */
            $user_data              =   new User();
            $username               =   $request['first_name'].' '.$request['last_name'];
            $user_data->first_name  =   $request['first_name'];
            $user_data->last_name   =   $request['last_name'];
            $user_data->email       =   $request['email'];
            $user_data->role_id     =   $request['role_id'];
            $user_data->password    =   Hash::make($request['password']);
            $user_data->is_approved =  ($request['role_id'] == 2) ? 0 :1;
            $user_data->timezone    =  ($request['timezone']) ? $request['timezone'] :'Asia/Manila';
            $user_data->save();
            $otp    =   rand(111111,999999);
            $token  = base64_encode($otp.'~'.$user_data->id);

            $url = url("/verify-email")."/".$token;

            $content    =   array("username" => $username, "link"=>$url);
            $options    =   [
                "to_name"   =>  $username,
                "to_email"  =>  $request['email'],
            ];
            $this->mail_send('verify-email',$subject=array(),$content,$options);
            /* Registration Email Send Work End */
            toastr()->success("Registration successfully, Please check your email for verification");
            return redirect()->route('login');
        }else{ 
            return view('front.login');
        }
        
    }

    // verify email

    public function resend_mail(Request $request){

         if(!Auth::check()){
                return redirect()->route('login');
            }

        if($request->isMethod('post')){

            $user_data = Auth::user();
            $otp    =   rand(111111,999999);
            $token  = base64_encode($otp.'~'.$user_data->id);

            $url = url("/verify-email")."/".$token;


            $content    =   array("username" => $user_data->first_name.' '.$user_data->last_name, "link"=>$url);
            $options    =   [
                "to_name"   =>  $user_data->first_name.' '.$user_data->last_name,
                "to_email"  =>  $user_data->email,
            ];
            $this->mail_send('verify-email',$subject=array(),$content,$options);
            /* Registration Email Send Work End */
            toastr()->success("Mail send successfully, Please check your email for verification");
            return redirect()->back();
        }

        return view('front.verify');
    }

    public function verify_mail($slug, Request $request){
        if(Auth::check()){
            Auth::logout();    
        }
        
        $data = explode('~', base64_decode($slug));

        if($data){

            $user = User::find($data[1]);
            if(!$user->email_verified_at) {
              $user->email_verified_at = now();
              $user->save();
              $status = "Your e-mail is verified. You can now login.";

            } else {
              $status = "Your e-mail is already verified. You can now login.";
            }
           // echo $status; die;
          toastr()->success($status);
          return redirect()->route('login');  
        }
        toastr()->error("Sorry your email cannot be identified.");
        return redirect()->route('login');

    }


	public function logout(){
		Auth::logout();
	    toastr()->success('Logged out Successfully');
	    return redirect()->route('home');
	}


	//  Function for forget
     public function forgot(Request $request){
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
            ]);
            if ($validator->fails()) { return redirect()->back()->withInput()->withErrors($validator); }
            $email      =   $request['email'];
            $password   =   $request['password'];
            $user_data  =   User::where("email",$email)->where("status",1)->where("is_deleted",0)->first();
            if(!empty($user_data)){
                $otp    =   rand(111111,999999);
                $token  =   base64_encode($otp);
                $username = $user_data->first_name.' '.$user_data->last_name;
                $password_reset     =   PasswordReset::where("email",$email)->first();
                if(empty($password_reset)){
                    $password_reset             =   new PasswordReset();
                }
                $password_reset->email      =   $email;
                $password_reset->token      =   $token;
                $password_reset->save();
                $reset_pass_link    =   url("/reset")."/".$token;
                $content    =   array("username" => $username, "link" => $reset_pass_link);
                $options    =   [
                                    "to_name"   =>  $user_data->first_name . ' ' .$user_data->last_name,
                                    "to_email"  =>  $user_data->email,
                ];
                $this->mail_send('forget-password',$subject=array(),$content,$options);
                toastr()->success('Please check email for password reset link');
                return redirect()->route("login");
            }else{
                return redirect()->back()->withErrors( [ "email" => ["Email is invalid"] ] );
            }
        }else{
            return view('front/forgot');
        }
    }
    


    //  Function for reset
    
    public function reset($slug, Request $request){
        $reset_data         =   PasswordReset::where("token",$slug)->first();
        if(!empty($reset_data)){
            $email      =   $reset_data->email;
            $to_time    =   strtotime($reset_data->updated_at);
            $from_time  =   strtotime(date("Y-m-d H:i:s"));
            $time_diff  =   round(abs($from_time - $to_time) / 60,2);
            $user_data      =   User::where("email",$email)->where("status",1)->where("is_deleted",0)->first();

             if($time_diff <= 15){
                if($request->isMethod('post')){
              
                    $validator = Validator::make($request->all(), [
                        'password'          =>  'required|min:6|max:16|confirmed',
                    ]);

                    if ($validator->fails()) {
                        return redirect()->back()->withInput()->withErrors($validator);
                    }
                    $password       =   $request['password'];
                    
                    if(!empty($user_data)){
                        $update_data    =   [ "password"  =>  Hash::make($password) ];
                        User::where("email",$email)->update($update_data);
                        PasswordReset::where("token",$slug)->delete();
                        toastr()->success('Password Reset successfully. Login to continue.');
                        return redirect()->route('login');
                    }else{
                        toastr()->error('Email is invalid');

                        return redirect()->back()->withInput();
                    }
                }else{
                    
                    if(!empty($user_data)){
                        return view('front/reset',compact('slug'));
                    }else{
                        toastr()->error('Invalid User');
                        return redirect()->route('login');
                    }
                }
            }else{
                toastr()->error('Link Expired');
                return redirect()->route('login');
            }
        }else{
            toastr()->error('Link Expired');
            return redirect()->route('login');
        }
    }

    




}