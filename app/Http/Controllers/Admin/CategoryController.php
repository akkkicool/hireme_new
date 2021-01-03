<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Redirect;
use Hash;
use Validator;
use Auth;
use Session;

class CategoryController extends Controller{

    protected $table        =   'categories';
    protected $slug         =   'category/categories';
    protected $page_title   =   'Category';
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
        $search_form    =   ["name","status"];
        $query          =   Category::select("*");
        $counter        =   ( ( ($request['page'])? $request['page'] : 1 ) -1 )*$this->pagination;
        if(!empty($search_form)){
            foreach($search_form as $key => $value){
                if($value == "status"){
                    if($request[$value] != 'all' && !empty($request[$value])){ $query->where($value,($request[$value]=="active"? 1 : 0)); }
                }else if(!empty($request[$value])){ $query->where($value,"like","%$request[$value]%"); }
            }
        }
        $query->where("is_deleted",0)->orderBy($orderBy,$order);

        $total_records  =   $query->count();
        $records        =   $query->paginate($this->pagination);
        return view('admin.category.index',compact('counter','records'));
    }

    public function edit($id,Request $request){
        if($request->isMethod('post')){
            $messages   =   [
                'name.regex' => "The :attribute may only contain letters, numbers and spaces.",
            ];
            $validator = Validator::make($request->all(), [
                'name'     =>  'required|min:6|max:250|regex:/^[a-zA-Z0-9\s]+$/',
            ],$messages);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
            /* Emoji Block Work Start */
            $emojy_errors   =   [];
            $has_emojis_old =   has_emojis_old( $request['name'] );
            if($has_emojis_old){ $emojy_errors["name"]   =  ["The name field should not contain emojis"];  }
            
            if(!empty($emojy_errors)){
                return redirect()->back()->withInput()->withErrors($emojy_errors);
            }
            /* Emoji Block Work End */
            /** Check Exists Work Start **/
            $exists_error = [];
            $exists   =   Category::where("id","!=",base64_decode($id))->where("name",$request['title'])->where("is_deleted",0)->get();
            if($exists->count() > 0){ $exists_error["title"]   =  ["The name has already been taken"];  }
            if(!empty($exists_error)){
                return redirect()->back()->withInput()->withErrors($exists_error);
            }
            /** Check Exists Work End **/
            $email_content          =   Category::find(base64_decode($id));
            $email_content->name   =   $request['name'];
            $email_content->save();
            toastr()->success($this->page_title." updated successfully");
            $redirect_url       =   url('admin').'/'.$this->slug.getUrlParams();
            return redirect()->to($redirect_url);
        }else{
            $record    =   Category::where("id",base64_decode($id))->first();
            if(!empty($record)){
                return view('admin.category.edit',compact('record'));
            }else{
                toastr()->error("Wrong Url");
                return redirect()->back();
            }
        }
    }

    

    public function create(Request $request){
        if($request->isMethod('post')){
            $messages   =   [
                'name.regex' => "The :attribute may only contain letters, numbers and spaces.",
                
            ];
            $validator = Validator::make($request->all(), [
                'name'     =>  'required|min:6|max:250|regex:/^[a-zA-Z0-9\s]+$/',
            ],$messages);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
            /* Emoji Block Work Start */
            $emojy_errors   =   [];
            $has_emojis_old =   has_emojis_old( $request['name'] );
            if($has_emojis_old){ $emojy_errors["name"]   =  ["The name field should not contain emojis"];  }
            
            if(!empty($emojy_errors)){
                return redirect()->back()->withInput()->withErrors($emojy_errors);
            }
            /* Emoji Block Work End */
            /** Check Exists Work Start **/
            $exists_error = [];
            $exists   =   Category::where("name",$request['name'])->where("is_deleted",0)->get();
            if($exists->count() > 0){ $exists_error["title"]   =  ["The name has already been taken"];  }
            if(!empty($exists_error)){
                return redirect()->back()->withInput()->withErrors($exists_error);
            }
            /** Check Exists Work End **/
            $email_content          =   new Category();
            $email_content->name   =   $request['name'];
            $email_content->save();
            toastr()->success($this->page_title." created successfully");
            $redirect_url       =   url('admin').'/'.$this->slug;
            return redirect()->to($redirect_url);
        }else{
            return view('admin.category.add');
        }
    }
    
    public function delete($id,Request $request){
        Category::where("id",base64_decode($id))->update(["is_deleted"=>1]);
        toastr()->success($this->page_title." deleted successfully");
        $redirect_url       =   url('admin').'/'.$this->slug.getUrlParams();
        return redirect()->to($redirect_url);
    }

    public function status_update($id,$status,Request $request){
        Category::where("id",base64_decode($id))->update(["status"=>$status]);
        toastr()->success($this->page_title." status updated successfully");
        $redirect_url       =   url('admin').'/'.$this->slug.getUrlParams();
        return redirect()->to($redirect_url);
    }
    
    

}
