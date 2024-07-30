<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdColumnServerList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servers_list', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable();
            #$table->foreign('user_id')->references('id')->on('users');
            $table->string('api_key')->nullable();
            $table->string('plan_id')->nullable();
            #$table->foreign('plan_type')->references('id')->on('enterprise_plans');
            $table->string('rpserver_id')->nullable();

        });
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
