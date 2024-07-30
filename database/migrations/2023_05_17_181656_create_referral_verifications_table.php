<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferralVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral_verifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('referrer_id'); // this is the id of the user that refer another user
            $table->unsignedBigInteger('referred_id'); // this is the user id of the user that used the referral link
            $table->boolean('verified')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referral_verifications');
    }
}
