<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Wave\DreamboothStripe;
use Wave\User;

class CheckForUserIdOnStripeWebhooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       $dreambooths = DreamboothStripe::where('customer', '!=', null)
       ->where('email_id', '!=', null)->get();

       if ($dreambooths->count() > 0 ) {

                $dreambooths->each(function($dreambooth){

                //Check if the customer column has a stripe_id prefix
                if (substr($dreambooth->customer, 0, 4) == "cus_") {

                    $user = User::where('stripe_id', $dreambooth->customer)->first();
                    if (!empty($user)) {
                        $dreambooth->update(['user_id' => $user->id]);
                    }
                  
                 //check if the customer column is a number, this denotes that, it's a user_id
                 }elseif (is_numeric($dreambooth->customer)) {
                      $dreambooth->update(['user_id' => $dreambooth->customer]);
                 }else {

                    //use the email_id
                    $user = User::where('email', $dreambooth->email_id)->first();
                    if (!empty($user)) {
                        $dreambooth->update(['user_id' => $user->id]);
                     }
                 }

            });

       }
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
