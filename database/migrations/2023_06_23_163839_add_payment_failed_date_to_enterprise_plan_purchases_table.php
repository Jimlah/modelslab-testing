<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentFailedDateToEnterprisePlanPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enterprise_plan_purchases', function (Blueprint $table) {
            $table->dateTime('to_cancel_date')->nullable()->after('plan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enterprise_plan_purchases', function (Blueprint $table) {
            //
        });
    }
}
