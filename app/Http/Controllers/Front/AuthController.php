<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;
use App\Models\Category;
use App\Models\FreelanceProfile;
use App\Models\Portfolio;
use Redirect;
use Hash;
use Validator;
use Auth;
use Session, View, DB;
use Carbon\Carbon;
use Exception;
use Image;

class AuthController extends Controller{

    public function __construct(){   
      
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
            $remember_me    =   true;

            $user_data      =   User::where(["email"=>$email, "status"=>1, "is_deleted"=>0])->whereIn('role_id', [2, 3])->first();

            if(!empty($user_data)){
                 if(Hash::check($password,$user_data->password)){
                   
                    Auth::attempt(["email"=>$email,"password"=>$password],$remember_me);
                    toastr()->success('Logged in Successfully');
                   
                    $redirect = (Auth::user()->role_id == 2) ? 'customer_profile' : 'freelance_profile';
                    return redirect()->route($redirect);
                   
                }else{
                    return redirect()->back()->withInput()->withErrors( [ "password" => ["Password is incorrect"] ] );

                }
            }else{
                toastr()->error('Email is invalid');
                return redirect()->back()->withInput();
            }  
        }else{ 
            if(Auth::check()){
                $redirect = (Auth::user()->role_id == 2) ? 'customer_profile' : 'freelance_profile';
                return redirect()->route($redirect);
            }
            return view('front.login');
        }
        
    }

    public function register(Request $request){

        
        if($request->isMethod('post')){
            $messages = [];
            $rules = [
                'email'            =>  'required|unique:users|min:6|max:250',
                'password'         =>  'required|min:6|max:16|confirmed',
                'role_id'          =>  'required',
                'accept'           =>  'required'
            ];
            $validator = Validator::make($request->all(),$rules,$messages);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            try{

                $user_data              =   new User();
                $user_data->email       =   $request['email'];
                $user_data->role_id     =   $request['role_id'];
                $user_data->password    =   Hash::make($request['password']);
                $user_data->save();
                // $otp    =   rand(111111,999999);
                // $token  = base64_encode($otp.'~'.$user_data->id);

                // $url = url("/verify-email")."/".$token;

                // $content    =   array("username" => $user_data->email, "link"=>$url);
                // $options    =   [
                //     "to_name"   =>  $username,
                //     "to_email"  =>  $request['email'],
                // ];
                // $this->mail_send('verify-email',$subject=array(),$content,$options);
                /* Registration Email Send Work End */
                toastr()->success("Registration successfully, Please login and update your profile");
                return redirect()->route('login');

            }catch(Exception $e){
                toastr()->error($e->getMessage());
                return redirect()->back()->withInput();
            }
            

        }else{
            return view('front.sign_up');
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
        return redirect()->route('index');
    }


    //  Function for forget
     public function forgot(Request $request){
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
            ]);
            if ($validator->fails()) { return redirect()->back()->withInput()->withErrors($validator); }
            $email      =   $request['email'];
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
            return view('front.forget_pass');
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

    public function update_profile(Request $request){
        if($request->isMethod('post')){
          
            $messages = [
                'first_name.regex' => "The :attribute may only contain letters, numbers and spaces.",
                'last_name.regex' => "The :attribute may only contain letters, numbers and spaces.",
            ];
            $rules = [
                'first_name' => 'required|min:3|max:55|regex:/^[a-zA-Z0-9\s]+$/',
                'last_name'  => 'required|min:3|max:55|regex:/^[a-zA-Z0-9\s]+$/',
                'gender'     => 'required',
                'dob'        => 'required',
                'address'    => 'required',
                'image'      => 'required|mimes:jpeg,jpg,png,gif,JPEG,JPG,PNG,GIF|max:100000'
            ];
            
            $validator = Validator::make($request->all(),$rules,$messages);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

              $user = Auth::user();
              $user->first_name = $request->first_name;
              $user->last_name  = $request->last_name;
              $user->gender  = $request->gender;
              $user->dob  = $request->dob;
              $user->address  = $request->address;
              $user->lat  = $request->lat;
              $user->lng  = $request->lng;
              $user->timezone  = $request->timezone;

              $fileName   =   null;
              if ($request->hasFile('image')) {
                   $image = $this->uploadImage( $request->file('image'));
                   if(Auth::user()->image){
                        unlink(public_path('uploads/users/images/') . Auth::user()->image);
                        unlink(public_path('uploads/users/thumbnail_image/') . Auth::user()->image);
                   }
                   $user->image  =   $image;
                   
               }

              $user->save();

              $redirect = (Auth::user()->role_id == 2) ? 'customer_profile' : 'freelance_profile';
                return redirect()->route($redirect);
            
        }else{

            if(Auth::check()){
               
               if(Auth::user()->first_name){
                    $redirect = (Auth::user()->role_id == 2) ? 'customer_profile' : 'freelance_profile';
                    return redirect()->route($redirect);
               }else{
                 return view('front.profile.update_profile');
               }
            }else{
                return redirect()->route('login');
            }

            
        }
    }


    public function preference(Request $request){
        if($request->isMethod('post')){
           
            $messages = [
            ];
            $rules = [
                'location_preference' => 'required',
                'range_in_km'  => 'required_if:location_preference,travel_to_client',
                'location'  => 'required_if:location_preference,client_travel_to_me',
                'phone'     => 'required',
                'email'        => 'required',
                'category'    => 'required',
                'sub_category'      => 'required',
                'exp'        => 'required',
                'tagline'    => 'required',
                'description'      => 'required',
            ];
            
            $validator = Validator::make($request->all(),$rules,$messages);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            $child = $request->all();
            $child['user_id'] = Auth::user()->id;

            FreelanceProfile::create( $child);

            toastr()->success('Information successfully saved');
            return redirect()->route('portfolio');
            
        }else{
            if(Auth::check()){
               
               if(Auth::user()->role_id == 3){
                 $data = FreelanceProfile::where('user_id', Auth::user()->id)->first();
                 if(!$data){
                    $category = Category::whereNull('parent_id')->where('status',1)->where('is_deleted',0)->pluck('name', 'id')->toArray();
            
                    return view('front.profile.preferences', compact('category'));
                 }else{
                     return redirect()->route('freelance_profile');
                   }
               }else{
                 return redirect()->route('freelance_profile');
               }
            }else{
                return redirect()->route('login');
            }
            
        }
    }


    public function portfolio(Request $request){
        if($request->isMethod('post')){
            $rules = [
                'files' => 'required',
            ];
            
            $validator = Validator::make($request->all(),$rules,[]);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

              $fileName   =   null;
              $file_array = array();
              if ($request->hasFile('files')) {

                    $image = $request->file('files');

                    foreach( $image as $key => $tmp_name) {
                        $image       = $tmp_name;            
                        $filename    = $image->getClientOriginalName();
                        $filename    = time()."-".$filename;
                        $image_resize = Image::make($image->getRealPath());              
                        $image_resize->resize(260, 193);
                        $image_resize->save(public_path('uploads/portfolio/' .$filename));
                        $file_array[$key] = array('user_id'=> Auth::user()->id, "type"=> 1, 'path'=>$filename );
                    }   
                    Portfolio::insert($file_array);
               }


               if ($request->hasFile('video')) {

                    $image = $request->file('video');
    
                    $filename    = $image->getClientOriginalName();
                    $filename    = time()."-".$filename;
                    $path = public_path().'/uploads/videos/';
                    $image->move($path, $filename);

                    $file_array = array('user_id'=> Auth::user()->id, "type"=> 2, 'path'=>$filename );
                 
                    Portfolio::insert($file_array);
               }

            
            toastr()->success('Information successfully saved');
            return redirect()->route('freelancer_profile');
            
        }else{
        
            if(Auth::check()){
               
               if(Auth::user()->role_id == 3){
                 $data = Portfolio::where('user_id', Auth::user()->id)->first();
                 if(!$data){
                    return view('front.profile.portfolio');
                 }else{
                     return redirect()->route('freelance_profile');
                   }
               }else{
                 return redirect()->route('customer_profile');
               }
            }else{
                return redirect()->route('login');
            }
            
        }
    }

    protected function uploadImage($image)
    {

        $photo = $image;

        $imagename = md5($photo->getClientOriginalName() . time()) . "." . $photo->getClientOriginalExtension(); 
   
        $destinationPath = public_path('/uploads/users/thumbnail_image');
        $thumb_img = Image::make($photo->getRealPath())->resize(100, 100);
        $thumb_img->save($destinationPath.'/'.$imagename,80);
                    
        $destinationPath = public_path('/uploads/users/images');
        $photo->move($destinationPath, $imagename);

        return $imagename;
    }

    public function get_child_category(Request $request){
        if($request->ajax()){
            $category_id = explode(",",$request->category_id);

            $child_category = Category::whereIn('parent_id', $category_id)->where('status',1)->where('is_deleted',0)->pluck('name', 'id')->toArray();
            return response()->json($child_category);
        }
    }

    public function update_image(Request $request){
        if($request->ajax()){
            $user = Auth::user();
              $fileName   =   null;
              if ($request->hasFile('file')) {
                   $image = $this->uploadImage( $request->file('file'));
                   if(Auth::user()->image){
                        unlink(public_path('uploads/users/images/') . Auth::user()->image);
                        unlink(public_path('uploads/users/thumbnail_image/') . Auth::user()->image);
                   }
                   $user->image  =   $image;
                   
               }

              $user->save();
              return response()->json($user->image);
            }
    }

}