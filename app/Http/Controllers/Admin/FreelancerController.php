<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Academic;
use App\Models\Schedule;
use App\Models\Meeting;
use Redirect;
use Hash;
use Validator;
use Auth;
use Session;
use Image; 
use Carbon\Carbon;


class FreelancerController extends Controller{

    protected $table        =   'users';
    protected $slug         =   'users/freelancers';
    protected $page_title   =   'Freelancer';
    protected $role_id      =   2;
    protected $pagination   =   10;
    
    public function __construct(){
        view()->share('table', $this->table);
        view()->share('slug', $this->slug);
        view()->share('page_title', $this->page_title);
        view()->share('base_url', url('admin').'/'.$this->slug);
    }

    public function index(Request $request){
        $orderBy        =   ($request['orderBy'])? $request['orderBy'] : 'id';
        $order          =   ($request['order'])? $request['order'] : 'desc';
        $search_form    =   ["status","first_name"];
        $query          =   User::select("*")->where('role_id',2);
        $counter        =   ( ( ($request['page'])? $request['page'] : 1 ) -1 )*$this->pagination;
        if(!empty($search_form)){
            foreach($search_form as $key => $value){
                if($value == "status"){
                    if($request[$value] != 'all' && $request[$value] != 'unapproved' && !empty($request[$value])){ $query->where($value,($request[$value]=="active"? 1 : 0)); }
                    if($request[$value] == 'unapproved' && !empty($request[$value])){ $query->where('is_approved',0); }
                }else if(!empty($request[$value])){ $query->where('first_name',"like","%$request[$value]%")->orWhere('last_name',"like","%$request[$value]%")->orWhere('email',"like","%$request[$value]%"); }
            }
        }
        $query->where("is_deleted",0)->orderBy($orderBy,$order);
        $total_records  =   $query->count();
        $records        =   $query->paginate($this->pagination);

        return view('admin.freelancer.index',compact('counter','records'));
    }

    public function view($id,Request $request){
        $record    =   User::where("id",base64_decode($id))->first();
        if(!empty($record)){

            return view('admin.freelancer.view',compact('record'));
        }else{
            toastr()->error("Wrong Url");
            return redirect()->back();
        }
    }

    public function edit($id,Request $request){
        if($request->isMethod('post')){
            $messages = [
                'password.confirmed' => "Password and Confirm password didn't match.",
                'first_name.regex' => "The :attribute may only contain letters, numbers and spaces.",
                'last_name.regex' => "The :attribute may only contain letters, numbers and spaces.",
                'mobile_number.regex' => "The :attribute may only contain numbers with country code as prefix."
            ];
            $rules = [
                'first_name'        =>  'required|min:3|max:55|regex:/^[a-zA-Z0-9\s]+$/',
                'last_name'         =>  'required|min:3|max:55|regex:/^[a-zA-Z0-9\s]+$/',
                'email'             =>  'required|min:6|max:250|unique:'.$this->table.',email,'.base64_decode($id),
                'mobile_number'     =>  'required|unique:'.$this->table.',mobile_number,'.base64_decode($id),
                'image'             =>  'mimes:jpeg,jpg,png,gif,JPEG,JPG,PNG,GIF|max:100000',
               // 'password'          =>  'required|confirmed|min:6',
            ];

            if(!empty($request['password'])){
                $rules['password']  =   'required|confirmed|min:6|max:16';
            }
            
            $validator = Validator::make($request->all(),$rules,$messages);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
            /* Emoji Block Work Start */
            $emojy_errors   =   [];
            $has_emojis_old =   has_emojis_old( $request['first_name'] );
            if($has_emojis_old){ $emojy_errors["first_name"]   =  ["The first name field should not contain emojis"];  }
            $has_emojis_old =   has_emojis_old( $request['last_name'] );
            if($has_emojis_old){ $emojy_errors["last_name"]   =  ["The last name field should not contain emojis"];  }
            $has_emojis_old =   has_emojis_old( $request['password'] );
            // if($has_emojis_old){ $emojy_errors["password"]   =  ["The password field should not contain emojis"];  }
            // $has_emojis_old =   has_emojis_old( $request['confirm_password'] );
           
            if(!empty($emojy_errors)){
                return redirect()->back()->withInput()->withErrors($emojy_errors);
            }
            /* Emoji Block Work End */
            $user_data              =   User::find(base64_decode($id));;
            $user_data->first_name  =   $request['first_name'];
            $user_data->last_name   =   $request['last_name'];
            $username               =   $request['first_name']. ' '.$request['last_name'];
            $user_data->email       =   $request['email'];
            $user_data->mobile_number      =   ($request['mobile_number'])? $request['mobile_number'] : null;
            $user_data->country_code      =   ($request['country_code'])? '+'.$request['country_code'] : null;
            $user_data->role_id     =   $this->role_id;
           // $user_data->password    =   Hash::make($request['password']);
            $user_data->city    =   $request['city'];
            $user_data->gender    =   $request['gender'];
            $user_data->dob    =   $request['dob'];
            if(!empty($request['password'])){
                $user_data->password =   Hash::make($request['password']);
            }
            if ($request->hasFile('image')) {
                if($user_data->image){
                        $image_url  =   public_path('/uploads/users/images').'/'.$user_data->image;
                        if(file_exists($image_url)){
                            unlink($image_url);
                        } 

                        $image_urls  =   public_path('/uploads/users/thumbnail_image').'/'.$user_data->image;
                        if(file_exists($image_urls)){
                            unlink($image_urls);
                        }
                    }
              
                $image = $this->uploadImage( $request->file('image'));
                $user_data->image   =   $image;
            }
          
            $user_data->save();
            $user_id        =   $user_data->id;
            /* Registration Email Send Work Start */
            $url        =   url('login');
            $content    =   array("username" => $username, "role" => "User", "url"=>$url, "email" => $request['email'], "password" => $request['password']);
            $options    =   [
                "to_name"   =>  $username,
                "to_email"  =>  $request['email'],
            ];
         //   $this->mail_send('admin-new-user-registration',$subject=array(),$content,$options);
            toastr()->success($this->page_title." updated successfully");
            $redirect_url       =   url('admin').'/'.$this->slug.getUrlParams();
            return redirect()->to($redirect_url);
        }else{
            $data    =   User::where("id",base64_decode($id))->first();
            if(!empty($data)){
                return view('admin.freelancer.edit',compact('data'));
            }else{
                toastr()->error("Wrong Url");
                return redirect()->back();
            }
        }
    }

   
    public function create(Request $request){
        if($request->isMethod('post')){

             $messages = [
                'password.confirmed' => "Password and Confirm password didn't match.",
                'first_name.regex' => "The :attribute may only contain letters, numbers and spaces.",
                'last_name.regex' => "The :attribute may only contain letters, numbers and spaces.",
                'mobile_number.regex' => "The :attribute may only contain numbers with country code as prefix."
            ];
            $rules = [
                'first_name'        =>  'required|min:3|max:55|regex:/^[a-zA-Z0-9\s]+$/',
                'last_name'         =>  'required|min:3|max:55|regex:/^[a-zA-Z0-9\s]+$/',
                'email'             =>  'required|unique:'.$this->table.'|min:6|max:250',
                'mobile_number'             =>  'required|unique:'.$this->table,
                'image'             =>  'mimes:jpeg,jpg,png,gif,JPEG,JPG,PNG,GIF|max:100000',
                'password'          =>  'required|confirmed|min:6',
            ];
            
            $validator = Validator::make($request->all(),$rules,$messages);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
            /* Emoji Block Work Start */
            $emojy_errors   =   [];
            $has_emojis_old =   has_emojis_old( $request['first_name'] );
            if($has_emojis_old){ $emojy_errors["first_name"]   =  ["The first name field should not contain emojis"];  }
            $has_emojis_old =   has_emojis_old( $request['last_name'] );
            if($has_emojis_old){ $emojy_errors["last_name"]   =  ["The last name field should not contain emojis"];  }
            $has_emojis_old =   has_emojis_old( $request['password'] );
            if($has_emojis_old){ $emojy_errors["password"]   =  ["The password field should not contain emojis"];  }
            $has_emojis_old =   has_emojis_old( $request['confirm_password'] );
           
            if(!empty($emojy_errors)){
                return redirect()->back()->withInput()->withErrors($emojy_errors);
            }
            /* Emoji Block Work End */
            $user_data              =   new User();
            $user_data->first_name  =   $request['first_name'];
            $user_data->last_name   =   $request['last_name'];
            $username               =   $request['first_name']. ' '.$request['last_name'];
            $user_data->email       =   $request['email'];
            $user_data->mobile_number      =   ($request['mobile_number'])? $request['mobile_number'] : null;
            $user_data->country_code      =   ($request['country_code'])? '+'.$request['country_code'] : null;
            $user_data->role_id     =   $this->role_id;
            $user_data->password    =   Hash::make($request['password']);
            $user_data->city    =   $request['city'];
            $user_data->gender    =   $request['gender'];
            $user_data->dob    =   $request['dob'];
            if ($request->hasFile('image')) {
                // $image          =   $request->file('image');
                // $name           =   time().'.'.$image->getClientOriginalExtension();
                // $destinationPath=   public_path('/uploads/users/images');
                // $image->move($destinationPath, $name);

                // $image_resize = Image::make($request->file('image')->getRealPath());
                // $image_resize->fit(200, 200);
                // $image_resize->save(public_path().'/uploads/users/thumbnail_image/' .$name);
                $image = $this->uploadImage( $request->file('image'));
                $user_data->image   =   $image;
            }
          
            $user_data->save();
            $user_id        =   $user_data->id;
            /* Registration Email Send Work Start */
            $url        =   url('login');
            $content    =   array("username" => $username, "role" => "User", "url"=>$url, "email" => $request['email'], "password" => $request['password']);
            $options    =   [
                "to_name"   =>  $username,
                "to_email"  =>  $request['email'],
            ];
           $this->mail_send('admin-new-user-registration',$subject=array(),$content,$options);
            toastr()->success($this->page_title." created successfully");
            $redirect_url       =   url('admin').'/'.$this->slug;
            return redirect()->to($redirect_url);    
           
        }else{
            return view('admin.freelancer.add');
        }
    }
    
    public function delete($id,Request $request){
        User::where("id",base64_decode($id))->update(["is_deleted"=>1]);
        toastr()->success($this->page_title." deleted successfully");
        $redirect_url       =   url('admin').'/'.$this->slug.getUrlParams();
        return redirect()->to($redirect_url);
    }
    
    public function status_update($id,$status,Request $request){
        User::where("id",base64_decode($id))->update(["status"=>$status]);
        toastr()->success($this->page_title." status updated successfully");
        $redirect_url       =   url('admin').'/'.$this->slug.getUrlParams();
        return redirect()->to($redirect_url);
    }

    public function approve_update($id,$status,Request $request){

       //  $user = User::where("id",base64_decode($id))->first();
       // $user = $user->updated_at->timezone('Asia/Kolkata')->format('Y-m-d');

       //  echo '<pre>'; print_r($user); die;

       
        User::where("id",base64_decode($id))->update(["is_approved"=>$status]);

        $details = [
                'body' => 'Congratulation, Your Account has been approved',
                'user' => auth()->user(),
                'action' => url('/doctor/profile'),
        ];

        if($status == 1){
            $user = User::find(base64_decode($id));
            // trigger pusher to make it dynamic
            notify($user, $details);

            $user->notify(new \App\Notifications\TaskComplete($details));

            $content    =   array("username" => $user->first_name.' '.$user->last_name);
            $options    =   [
                                "to_name"   =>  $user->first_name . ' ' .$user->last_name,
                                "to_email"  =>  $user->email,
            ];
            $this->mail_send('approve-doctor-profile',$subject=array(),$content,$options);
        }


        toastr()->success($this->page_title."Account updated successfully");
        $redirect_url       =   url('admin').'/'.$this->slug.getUrlParams();
        return redirect()->to($redirect_url);
    }

    public function approve_academic($id, Request $request){
        Academic::where("id",base64_decode($id))->update(["status"=>1]);
        toastr()->success("Academic data approved successfully");
        return redirect()->back();
    }

    public function disapprove_academic($id, Request $request){
        $acedemic = Academic::where("id",base64_decode($id))->first();

        $details = [
                'body' => 'Academic data has been disapproved, Please upload again',
                'user' => auth()->user(),
                'action' => url('/doctor/academic'),
        ];

        if($acedemic){

            $user = User::find($acedemic->user_id);
            // trigger pusher to make it dynamic
            notify($user, $details);

            $user->notify(new \App\Notifications\TaskComplete($details));    
        }
        $acedemic->delete();
        toastr()->success("Academic data deleted successfully");
        return redirect()->back();
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
