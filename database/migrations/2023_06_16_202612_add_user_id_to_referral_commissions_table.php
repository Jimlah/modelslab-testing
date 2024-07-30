<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToReferralCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('referral_commissions', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->after('plan_id')->constrained();
            $table->dropColumn('referral_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('referral_commissions', function (Blueprint $table) {
            //
        });
    }
}
