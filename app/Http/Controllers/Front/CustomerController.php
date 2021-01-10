<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FreelanceProfile;
use App\Models\Portfolio;
use App\Models\Store;
use Validator;
use Auth;
use Hash;
use Session;

class CustomerController extends Controller{

    public function __construct(){   
       
    }

    public function profile(Request $request){
    	$user = Auth::user();

    	if($request->isMethod('post')){
    		$validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name'=>'required',
                'dob'=>'required',
                'address'=>'required',
              //  'password_confirmation'=>'sometimes|required_with:password',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }else{
                 
            	$user->first_name = $request->first_name;
            	$user->last_name = $request->last_name;
            	$user->dob = $request->dob;
            	$user->address = $request->address;
            	$user->lat = $request->lat;
            	$user->lng = $request->lng;
            	$user->save();

                toastr()->success('Profile Successfully updated !');
                return redirect()->back();
            }
    	}
    	return view('front.customer.profile', compact('user'));
    }


    public function change_password(Request $request){
        
        if($request->isMethod('post')){
            //gs(Session::all());
            $validator = Validator::make($request->all(), [
                'old_password' => 'required',
                'password'=>'required|confirmed',
              //  'password_confirmation'=>'sometimes|required_with:password',
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
                    $obj_user->password = \Hash::make($request->password);
                    $obj_user->save();  
                     toastr()->success('Password Successfully updated !');
                    return redirect()->back()->withInput(['tab'=>'change_password']);
                  }else{
                     toastr()->error('Old password is wrong!');
                    return redirect()->back()
                            ->withInput(['tab'=>'change_password']);
                  }
            }
        }
        
    }


    public function browse(){
        $record = Store::with('user')->where('is_paid', 1)->groupBy('user_id')->paginate();
        gs($record);
    }


    

}