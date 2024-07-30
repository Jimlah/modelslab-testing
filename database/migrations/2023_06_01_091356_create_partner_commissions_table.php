<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_commissions', function (Blueprint $table) {
            $table->id();
            $table->string('referral_code');
            $table->foreignId('plan_id');
            $table->unsignedBigInteger('referred_id');
            $table->decimal('amount');

            $table->foreign('referred_id')->references('id')->on('users');
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
        Schema::dropIfExists('partner_commissions');
    }
}
