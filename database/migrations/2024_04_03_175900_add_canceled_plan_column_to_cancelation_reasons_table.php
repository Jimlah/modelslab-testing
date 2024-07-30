<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCanceledPlanColumnToCancelationReasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cancelation_reasons', function (Blueprint $table) {
            $table->string('canceled_plan')->nullable()->after('subscription_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cancelation_reasons', function (Blueprint $table) {
            //
        });
    }
}
