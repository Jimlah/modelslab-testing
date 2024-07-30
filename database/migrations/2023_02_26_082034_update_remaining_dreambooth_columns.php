<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Wave\DreamboothStripe;
use Wave\User;

class UpdateRemainingDreamboothColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       $dreambooths = DreamboothStripe::where('user_id', '=', null)
       ->where('email_id', '!=', null)->get();

       if ($dreambooths->count() > 0 ) {

                $dreambooths->each(function($dreambooth){
                    //use the email_id
                    $user = User::where('email', $dreambooth->email_id)->first();
                    if (!empty($user)) {
                        $dreambooth->update(['user_id' => $user->id]);
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
