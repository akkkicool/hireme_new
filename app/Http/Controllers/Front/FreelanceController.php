<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FreelanceProfile;
use App\Models\Portfolio;
use App\Models\Category;
use App\Models\Store;
use App\Models\StoreSubCategory;
use App\Models\StorePortfolio;
use Validator;
use Auth;
use Hash;
use Session;
use DB;
use Exception;
use Image;

class FreelanceController extends Controller{

    public function __construct(){   
       
    }

    public function profile(Request $request){
      $user = Auth::user();
    	$social['fb_acc'] = Auth::user()->profile->fb_acc;
    	$social['twitter_acc'] =  Auth::user()->profile->twitter_acc;
    	$social['insta_acc'] =  Auth::user()->profile->insta_acc;

    	$service['tagline'] =  Auth::user()->profile->tagline;
    	$service['description'] =  Auth::user()->profile->description;
    	$service['exp'] =  Auth::user()->profile->exp;
    	$service['rate'] =  Auth::user()->profile->rate;
    	$service['category'] =  Auth::user()->profile->category;
    	$service['sub_category'] =  Auth::user()->profile->sub_category;

       $category = Category::whereNull('parent_id')->where('status',1)->where('is_deleted',0)->pluck('name', 'id')->toArray();


       $cat =  array_keys($category); 

       $sub_category = Category::whereIn('parent_id', $cat)->where('status',1)->where('is_deleted',0)->pluck('name', 'id')->toArray();

       

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

    	return view('front.freelancer.profile', compact('social', 'service', 'user', 'category', 'sub_category'));
    }


    public function change_password(Request $request){
        $data = array(); 

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

    public function update_account(Request $request){
      
        if($request->isMethod('post')){
        	
             $update = FreelanceProfile::where('user_id', Auth::user()->id)->first(); 
             $update->fb_acc = $request->fb_acc;          
             $update->twitter_acc = $request->twitter_acc;
             $update->insta_acc  = $request->insta_acc;
             $update->save();
             toastr()->success('Social Account Successfully updated !');
             return redirect()->back()->withInput(['tab'=>'social_accounts']);
            
        }
        
    }

    public function delete_portfolio(Request $request){
     
        if($request->ajax()){
       		  Portfolio::where('id',$request->id)->delete();
	          return response()->json('true');
        }
        
    }


    public function freelancer_portfolio(Request $request){
    	return view('front.freelancer.portfolio');
    }


    public function update_service(Request $request){

        if($request->isMethod('post')){

              $profile = FreelanceProfile::where('user_id', Auth::user()->id)->first();
              if($profile){
                $profile->tagline =  $request->tagline;
                $profile->description =  $request->description;
                $profile->exp =  $request->exp;
                $profile->rate =  $request->rate;
                $profile->category =  $request->category;
                $profile->sub_category =  $request->sub_category;
                $profile->save();
              }

              toastr()->success('Services Successfully updated !');
             return redirect()->back()->withInput(['tab'=>'social_accounts']);
            
        }
        
    }


    public function store_front(Request $request){

       $record = Store::where('user_id', Auth::user()->id)->get();
       return view('front.freelancer.store.index', compact('record'));         
    }

   

    public function store_front_view($id,Request $request){
        $record    =  Store::with(['storeSubCategory', 'storePortfolio'])->where("id",base64_decode($id))->where('user_id', Auth::user()->id)->first();

        if(!empty($record)){
            return view('front.freelancer.store.view',compact('record'));
        }else{
            toastr()->error("Wrong Url");
            return redirect()->back();
        }
    }


     public function store_front_edit($id,Request $request){
        $record    =   Store::with(['storeSubCategory', 'storePortfolio'])->where("id",base64_decode($id))->where('user_id', Auth::user()->id)->first();
        if(!empty($record)){
            return view('front.freelancer.store.edit',compact('record'));
        }else{
            toastr()->error("Wrong Url");
            return redirect()->back();
        }
    }


    public function store_create(Request $request){

      if($request->isMethod('post')){


           $validator = Validator::make($request->all(), [
                'category_id' => 'required',
                'exp'=>'required',
                'sub_cat_id'=>'required',
                'sub_cat_price'=>'required',
                'sub_cat_time'=>'required',
                'tagline'=>'required',
                'description'=>'required',
                'files' => 'required'
              //  'password_confirmation'=>'sometimes|required_with:password',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }else{

              DB::beginTransaction();

              try {
                  $store = new Store();
                  $store->category_id = $request->category_id;
                  $store->exp = $request->exp;
                  $store->tagline = $request->tagline;
                  $store->description = $request->description;
                  $store->user_id = Auth::user()->id;

                  if($store->save()){
                    $sub_category = $request->sub_cat_id;
                    foreach($sub_category as $k => $v){
                      if(isset($v)){
                        $image_arr[] = ['user_id'=>Auth::user()->id,'store_id'=>$store->id, 'sub_cat_id'=>$v,'sub_cat_price'=>$request->sub_cat_id[$k],'sub_cat_time'=>$request->sub_cat_time[$k]  ];
                      }
                       StoreSubCategory::insert($image_arr);
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
                              $file_array[$key] = array('user_id'=> Auth::user()->id,'store_id'=>$store->id, "type"=> 1, 'file_name'=>$filename );
                          }   
                          StorePortfolio::insert($file_array);
                     }


                     if ($request->hasFile('video')) {

                          $image = $request->file('video');
          
                          $filename    = $image->getClientOriginalName();
                          $filename    = time()."-".$filename;
                          $path = public_path().'/uploads/videos/';
                          $image->move($path, $filename);

                          $file_array = array('user_id'=> Auth::user()->id,'store_id'=>$store->id, "type"=> 2, 'file_name'=>$filename );
                       
                          StorePortfolio::insert($file_array);
                     }

                     DB::commit();

                     toastr()->success('Store Successfully created !');

                     return redirect()->route('store_front');


                  }
                  
              } catch (\Exception $e) {
                  DB::rollback();
                  gs( $e->getMessage());
                  toastr()->error('something went wrong !');
                  return redirect()->back()
                            ->withInput();
              }

            }


      }


       $category = Category::whereNull('parent_id')->where('status',1)->where('is_deleted',0)->pluck('name', 'id')->toArray();


       $cat =  array_keys($category); 

       $sub_category = Category::whereIn('parent_id', $cat)->where('status',1)->where('is_deleted',0)->pluck('name', 'id')->toArray();

       return view('front.freelancer.store.create', compact('category', 'sub_category'));         
    }

}