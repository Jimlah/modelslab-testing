<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemovePlanPriceYearlyOnEnterprisePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enterprise_plans', function (Blueprint $table) {
            $table->renameColumn('plan_price_monthly', 'plan_period');
            $table->renameColumn('plan_price_id_monthly', 'plan_price_id');
            $table->dropColumn('plan_price_yearly');
            $table->dropColumn('plan_price_id_yearly');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enterprise_plans', function (Blueprint $table) {
            //
        });
    }
}
