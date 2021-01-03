<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;
use Redirect;
use Hash;
use Validator;
use Auth;
use Session;

class CommonController extends Controller{
    protected $pagination   =   10;


	public function inquiry(Request $request){
		$slug         =   'inquiry';
		$base_url = url('admin').'/'.$slug;
		$page_title   =   'Inquiry';

		$orderBy        =   ($request['orderBy'])? $request['orderBy'] : 'id';
        $order          =   ($request['order'])? $request['order'] : 'desc';
        $search_form    =   ["first_name","status"];
        $query          =   Inquiry::select("*");
        $counter        =   ( ( ($request['page'])? $request['page'] : 1 ) -1 )*$this->pagination;
        if(!empty($search_form)){
            foreach($search_form as $key => $value){
                if($value == "status"){
                    if($request[$value] != 'all' && !empty($request[$value])){ $query->where($value,($request[$value]=="active"? 1 : 0)); }
                }else if(!empty($request[$value])){ $query->where('first_name',"like","%$request[$value]%")->orWhere('last_name',"like","%$request[$value]%")->orWhere('email',"like","%$request[$value]%"); }
            }
        }
        $query->orderBy($orderBy,$order);
        $total_records  =   $query->count();
        $records        =   $query->paginate($this->pagination);

		return view('admin.inquiry.index',compact('records', 'slug', 'base_url', 'page_title', 'counter'));
	}


	public function inquiry_view($id,Request $request){
        $record    =   Inquiry::where("id",base64_decode($id))->first();
        $slug         =   'inquiry';
        $base_url = url('admin').'/'.$slug;

        if(!empty($record)){
            return view('admin.inquiry.view',compact('record', 'slug', 'base_url'));
        }else{
            toastr()->error("Wrong Url");
            return redirect()->back();
        }
    }


    public function today_order(Request $request){
        return view('admin.order.today');
    }


    public function past_order(Request $request){
        return view('admin.order.past');
    }

    public function subscription(){
        return view('admin.subscription');
    }

}