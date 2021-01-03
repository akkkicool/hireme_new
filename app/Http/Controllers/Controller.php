<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\EmailTemplate;
use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function mail_send($slug='default',$subject=array(),$content=array(),$options=array(),$attachment_path=null){
        $to_name    =   (isset($options['to_name']) && !empty($options['to_name']) )? $options['to_name'] : 'NA';
        $to_email   =   (isset($options['to_email']) && !empty($options['to_email']) )? $options['to_email'] : 'NA';

        $email_template     =   EmailTemplate::where("slug",$slug)->where("status",1)->where("is_deleted",0)->first();

     
        
        if(!empty($email_template)){
            if(!empty($subject)){
                foreach($subject as $sb_key=>$sb_value){
                    $email_template->subject    =   str_replace( "{".$sb_key."}", $sb_value, $email_template->subject );
                }
            }
            if(!empty($content)){
                foreach($content as $ct_key=>$ct_value){
                    $email_template->content    =   str_replace( "{".$ct_key."}", $ct_value, $email_template->content );
                }
            }
            $data   =   ['contents' => $email_template->content];
             
            Mail::send('emails.emails', $data, function($message) use ($to_name, $to_email, $email_template,$attachment_path) {
                $message->to($to_email, $to_name)->subject
                    ($email_template->subject);
                $message->from(env("MAIL_USERNAME", "atul@cloudpolyclinic.com"), (getSettings('site-title'))? getSettings('site-title') : env("APP_NAME", "Laravel") );
                if($attachment_path){
                    $message->attach($attachment_path,$options = []);
                }
            });

          
        }
        return;
    }
}
