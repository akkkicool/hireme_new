<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail, DB;
use App\Models\User;
use App\Models\MobileVerified;
use Carbon\Carbon;

class SendNewYearWishes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:newyear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a text to user on new year';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         
           $i = 0;
           $users = User::all();  

           foreach($users as $user)
           {
                $mobile = MobileVerified::where('user_id', $user->id)->first();

                if($mobile){
                    $mes = 'Today is '.$user->first_name.' Birthday . Please take time and  wish  a happy birthday!';
                    twilioSms($mobile->mobile_number, $mes);
                }

               // $email = $user->email;
               // $username = $user->first_name.' '.$user->last_name;
               // $data   =   ['contents' => 'Today is '.$user->first_name.' Birthday . Please take time and  wish  a happy birthday!'];

               // Mail::send('emails.emails', $data, function($message) use ($email, $username) {
               //      $message->to($email, $username )->subject
               //          ('Birthday Wishes');
               //      $message->from((getSettings('admin-receive-email'))? getSettings('admin-receive-email') : env("MAIL_USERNAME", "atulgangapur@gmail.com"), (getSettings('site-title'))? getSettings('site-title') : env("APP_NAME", "Laravel") );
               //  });
               $i++; 
           }

           $this->info($i.' New Year messages sent successfully!');
    }
}
