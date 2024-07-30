<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrialEndsAtToResellerSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reseller_subscriptions', function (Blueprint $table) {
            $table->dateTime('trial_ends_at')->after('role_id')->nullable();
            $table->string('email')->nullable()->after('role_id');
            $table->dateTime('end_date')->after('role_id')->nullable();
            $table->integer('usage')->after('role_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reseller_subscriptions', function (Blueprint $table) {
            //
        });
    }
}
