<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddServerDeployedOnEnterprisePlanPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enterprise_plan_purchases', function (Blueprint $table) {
            $table->boolean('server_deployed')->default(true)->after('start_date');
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
