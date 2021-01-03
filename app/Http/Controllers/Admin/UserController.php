<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;
use App\Models\GlobalSetting;
use App\Models\Meeting;
use App\Mail\AdminResetPassword;
use Validator, Hash, Auth, DB, Session, Mail, Cookie;

class UserController extends Controller
{
    

    //  Function for login
   public function login(Request $request){

    if(Auth::check()){
       //echo 'sad'; die;
        return redirect()->route('admin.dashboard');
    }

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
            $user_data      =   User::where(["email"=>$email, "status"=>1, "is_deleted"=>0])->whereIn('role_id', [1])->first();
            if(!empty($user_data)){
                
                if(Hash::check($password,$user_data->password)){    

                    Auth::attempt(["email"=>$email,"password"=>$password], $remember_me);
                    
                    toastr()->success('Logged in Successfully');
                    return redirect()->route("admin.dashboard");
                }else{
                     toastr()->error('Password is incorrect');
                    return redirect()->back()->withInput();
                }
            }else{
                toastr()->error('Email is invalid');
                return redirect()->back()->withInput();
            }  
        }else{

            
            return view('admin.auth.login');
        }

    }

    //For  logout
    public function logout(){
        Auth::logout();
        toastr()->success('Logged out Successfully');
        return redirect()->route('admin.login');
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
             
             if ($user_data->email != null) {
                Mail::to($user_data->email)->queue(new AdminResetPassword($user_data, $token));
              }
              toastr()->success('Please check email for password reset link');
                return redirect()->route("admin.login");
                
            }else{
                return redirect()->back()->withErrors( [ "email" => ["Email is invalid"] ] );
            }
        }else{
            return view('admin/auth/forget');
        }
    }
    


    //  Function for reset
    
    public function reset($slug,Request $request){

        $reset_data         =   PasswordReset::where("token",$slug)->first();

        if(!empty($reset_data)){
            $email      =   $reset_data->email;
            $to_time    =   strtotime($reset_data->updated_at);
            $from_time  =   strtotime(date("Y-m-d H:i:s"));
            $time_diff  =   round(abs($from_time - $to_time) / 60,2);
            $user_data      =   User::where("email",$email)->where("status",1)->where("is_deleted",0)->first();

             if($time_diff <= 15){
                if($request->isMethod('post')){
                    $messages = [
                        'same' => "Password and Confirm password didn't match.",
                        'regex' => "Your password must be more than 6 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character."
                    ];
                    $validator = Validator::make($request->all(), [
                        'password'          =>  'required|min:6|max:55|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                        'password_confirmation'  =>  'required|same:password|min:6|max:55',
                    ],$messages);
                    if ($validator->fails()) {
                        return redirect()->back()->withInput()->withErrors($validator);
                    }
                    $password       =   $request['password'];
                    
                    if(!empty($user_data)){
                        $update_data    =   [ "password"  =>  Hash::make($password) ];
                        User::where("email",$email)->update($update_data);
                        PasswordReset::where("token",$slug)->delete();
                        toastr()->success('Password Reset successfully. Login to continue.');
                        return redirect()->route('admin.login');
                    }else{
                        toastr()->error('Email is invalid');

                        return redirect()->back()->withInput();
                    }
                }else{
                    
                    if(!empty($user_data)){
                        return view('admin/auth/reset',compact('slug'));
                    }else{
                        toastr()->error('Invalid User');
                        return redirect()->route('admin.login');
                    }
                }
            }else{
                toastr()->error('Link Expired');
                return redirect()->route('admin.login');
            }
        }else{
            toastr()->error('Link Expired');
            return redirect()->route('admin.login');
        }
    }
  

    // function for dashboard
    public function dashboard(){

        return view('admin.home');
    }


    public function global_settings(Request $request){

        if($request->isMethod('post')){
            $id     =   $request['id'];
            $value  =   $request['value'];
            GlobalSetting::where("id",$id)->update(['value' => $value]);
            echo "success";
        }else{
            $records     =   GlobalSetting::where("status",1)->where("is_deleted",0)->get();
            return view('admin/global_settings',compact('records'));
        }
    }


   //For  Password Change
    public function profile(Request $request){
         $data = Auth::user(); 

        if($request->isMethod('post')){
           

            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name'=>'required',
                'email'=> 'required|unique:users,email,' . Auth::user()->id,
                'image' => 'sometimes|mimes:jpeg,jpg,png,gif,svg'

            ]);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }else{
                $user_data =  $request->except(['_token']);

                $fileName   =   null;
                if ($request->hasFile('image')) {
                   $image = $this->uploadImage( $request->file('image'));
                   $user_data['image']  =   $image;
                   unlink(public_path('uploads/users/images/') . Auth::user()->image);
                   unlink(public_path('uploads/users/thumbnail_image/') . Auth::user()->image);
                }

                $user       =   User::where('id', Auth::user()->id)->update($user_data);
                 toastr()->success('Profile Successfully updated !');
               return redirect()->route('admin.profile');
               
            }
        }
        return view('admin/users/update_profile', compact('data'));
    }



    public function change_password(Request $request){
        $data = array(); 

        if($request->isMethod('post')){
           

            $validator = Validator::make($request->all(), [
                'old_password' => 'required',
                'passwords'=>'required|confirmed',
                'passwords_confirmation'=>'sometimes|required_with:passwords',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }else{
                 $current_password = Auth::user()->password;           
                  if(Hash::check($request->old_password, $current_password))
                  {    
                     $user_id = Auth::user()->id;                       
                    $obj_user = User::find($user_id);
                    $obj_user->password = \Hash::make($request->passwords);
                    $obj_user->save();  
                     toastr()->success('Password Successfully updated !');
                    return redirect()->back();
                  }else{
                     toastr()->error('Old password is wrong!');
                    return redirect()->back()
                            ->withInput();
                  }
            }
        }
        return view('admin/users/change_password', compact('data'));
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


}
