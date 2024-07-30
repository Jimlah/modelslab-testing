<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeEnterprisePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprise_plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name');
            $table->string('plan_type');
            $table->string('tag_line');
            $table->string('plan_price_monthly');
            $table->string('plan_price_id_monthly');
            $table->string('plan_price_yearly');
            $table->string('plan_price_id_yearly');
            $table->string('plan_duration');
            $table->text('plan_description');
            $table->string('plan_features');
            $table->string('plan_status');
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
        Schema::dropIfExists('enterprise_plans');
    }
}
