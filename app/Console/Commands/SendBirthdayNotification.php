<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Utils\NotificationUtil;
use App\Business;
use App\Transaction;
use \Notification;
use App\Notifications\CustomerNotification;
use App\NotificationTemplate;
use App\Contact;
use DateTime;
use DateInterval;
use App\Mail\BirthdayNotification;
use App\Mail\ExceptionOccured;
use Mail;
// use Illuminate\Support\Facades\Mail;
class SendBirthdayNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pos:autoSendBirthdayNotification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends Birthday  and Aniversary notification';

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
     * @return mixed
     */
    public function handle()
    {
        $today_date = date("m/d") ;
       // $dt =  date("Y/m/d") ;
        // dd($today_date  );
        $customer  = Contact::all();
        foreach( $customer as $key => $customer){
        //  print_r($customer->first_name);
        //  dd('dfdgfdgd');
         $customer_do = new DateTime($customer->dob);
        //  dd(  $customer_do);
         $c_dob =   $customer_do->format("m/d");
        // dd( $c_dob == $today_date);
         if( $c_dob  ==  $today_date ){

            $emailContent=[
                'heading'    => 'Birthday wishes',
                'sub_heading'=> 'Birthday wishes',
                'body'       => 'Happy birthday  '.$customer->first_name .'! It is my wish that you will have years upon years of extraordinary achievements both in your business and personal lives. We take this occasion to express our wholehearted appreciation to you for going all lengths to keep our business afloat. Happy birthday!',
                'footer'     => 'Thanks & Regards 
                                        Swarnima Jewllers',
                's_date'     => date('d-m-Y'),
               
            ];
            // dd($emailContent);
            Mail::to('angupta00@gmail.com')->send(new BirthdayNotification($emailContent));
            break;
         }else{
            
         }
        }
       
    }
}
