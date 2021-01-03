<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meeting;
use App\Models\User;
use App\Models\PaymentWithdraw;
use Redirect;
use Hash;
use Validator;
use Auth;
use Session;
use DB;
use Carbon\Carbon;

class MeetingController extends Controller{

	protected $pagination   =   10;

	public function index(Request $request){

		//gs($request->all());

		$orderBy        =   ($request['orderBy'])? $request['orderBy'] : 'id';
        $order          =   ($request['order'])? $request['order'] : 'desc';
        $search_form    =   ["status","patient_name","doctor_name","filter"];
        $query          =   Meeting::with(['patient_data','doctor_data'])->select('*');
        $counter        =   ( ( ($request['page'])? $request['page'] : 1 ) -1 )*$this->pagination;
        if(!empty($search_form)){
            foreach($search_form as $key => $value){
                if($value == "status"){
                    if($request[$value] != 'all' && !empty($request[$value])){ 
                    	$query = $query->where('status',$request[$value]); 
                    }
                }elseif($value == "patient_name" && !empty($request[$value])){ 
                	$name = $request[$value];
                	$query =  $query->whereHas('patient_data', function ($query) use ($name)  {
                              return $query->where('role_id',3)->where(DB::raw("CONCAT(`first_name`, ' ', `last_name`)"), 'LIKE', "%".$name."%");
                          }); 
                }elseif($value == "doctor_name" && !empty($request[$value])){ 
                	$name = $request[$value];
                	$query =  $query->whereHas('doctor_data', function ($query) use ($name)  {
                              return $query->where('role_id',2)->where(DB::raw("CONCAT(`first_name`, ' ', `last_name`)"), 'LIKE', "%".$name."%");
                          })->orwhere('transaction_id',"like","%$name%"); 
                }elseif($value == "filter" && !empty($request[$value])){ 
                	$filter = $request[$value];
                	
                	if($request[$value] != 'all' && !empty($filter)){ 
                		if($filter == 1){
                			$query = $query->whereDate('created_at', '=', Carbon::today()->toDateString());
                		}elseif($filter == 2){
                			$query = $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                		}elseif($filter == 3){
                			$query = $query->whereMonth('created_at', '=', date('m'));
                		}elseif($filter == 4){
                			$query = $query->whereYear('created_at', '=', date('Y'));
                		}
                    	
                    }
                }

            }
        }
        $query->orderBy($orderBy,$order);
        $total_records  =   $query->count();
        $data        =   $query->paginate($this->pagination);
		return view('admin.meeting.index', compact('data'));
	}



	public function withdraw(Request $request){

		$orderBy        =   ($request['orderBy'])? $request['orderBy'] : 'id';
        $order          =   ($request['order'])? $request['order'] : 'desc';
        $search_form    =   ["status","name","filter"];
        $query          =   PaymentWithdraw::with('user');
        $counter        =   ( ( ($request['page'])? $request['page'] : 1 ) -1 )*$this->pagination;
        if(!empty($search_form)){
            foreach($search_form as $key => $value){
                if($value == "status"){
                    if($request[$value] != 'all' && !empty($request[$value])){ 
                    	$query = $query->where('status',$request[$value]); 
                    }
                }elseif($value == "name" && !empty($request[$value])){ 
                	$name = $request[$value];
                	$query =  $query->whereHas('user', function ($query) use ($name)  {
                              return $query->where(DB::raw("CONCAT(`first_name`, ' ', `last_name`)"), 'LIKE', "%".$name."%");
                          })->orwhere('transaction_id',"like","%$name%"); 
                }elseif($value == "filter" && !empty($request[$value])){ 
                	$filter = $request[$value];
                	if($request[$value] != 'all' && !empty($filter)){ 
                		if($filter == 1){
                			$query = $query->whereDate('created_at', '=', Carbon::today()->toDateString());
                		}elseif($filter == 2){
                			$query = $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                		}elseif($filter == 3){
                			$query = $query->whereMonth('created_at', '=', date('m'));
                		}elseif($filter == 4){
                			$query = $query->whereYear('created_at', '=', date('Y'));
                		}
                    	
                    }
                }

            }
        }
        $query->orderBy($orderBy,$order);
        $total_records  =   $query->count();
        $records        =   $query->paginate($this->pagination);
        return view('admin.withdraw.index', compact('records'));
	}



    public function payment_withdraw(Request $request){
        if($request->ajax()){

           
            $data = PaymentWithdraw::where(['id'=>$request->id])->update([
                'transaction_id'=>$request->transaction_id,
                'withdrawal_date'=>Carbon::now(),
                'status'=>2,
            ]);

            if($data ){

              $user = PaymentWithdraw::where('id',$request->id)->first();

              $user = User::find($user->user_id);

              $details = [
                      'user' => Auth::user(),
                      'body' => 'Payment request has been approved',
                      'action' => url('/doctor/withdraw'),
                      'date' => Carbon::now()
              ];

              notify($user, $details);

              $user->notify(new \App\Notifications\TaskComplete($details));


             return response()->json(['status' => 1, 'msg' => 'Payment has been sent approved']);
            } else {
               return response()->json(['status' => 0]);
            }

      }
    }


}