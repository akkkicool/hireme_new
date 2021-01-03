<?php

namespace App\Mail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\EmailTemplate;


class AdminResetPassword extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * The token instance.
     *
     * @var Token
     */
    protected $token;

    /**
     * The userdetails instance.
     *
     * @var userdetails
     */
    protected $userdetails;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $userdetails, $token)
    {
        $this->userdetails = $userdetails; 
        $this->token = $token; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       

       $email_template = EmailTemplate::where("slug",'admin-forget-password')->where("status",1)->where("is_deleted",0)->first();

       $url =  url("/admin/reset")."/".$this->token;

       $subject = $email_template->subject; 

       $username = $this->userdetails->first_name. ' ' . $this->userdetails->last_name;

       $content    =   array("username" => $username, "link" => $url);
        
        if(!empty($email_template)){
            if(!empty($content)){
                foreach($content as $ct_key=>$ct_value){
                    $email_template->content    =   str_replace( "{".$ct_key."}", $ct_value, $email_template->content );
                }
            }
            $mail_content   =   $email_template->content;
        }
        
        return $this->markdown('emails.emails')
                    ->subject($subject)
                    ->with([
                        'contents' => $mail_content,
                        ]);
    }
}
