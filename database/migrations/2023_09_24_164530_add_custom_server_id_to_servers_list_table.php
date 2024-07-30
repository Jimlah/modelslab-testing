<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomServerIdToServersListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servers_list', function (Blueprint $table) {
            $table->foreignId('custom_server_id')->nullable()->constrained();
            $table->string('purchase_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servers_list', function (Blueprint $table) {
            //
        });
    }
}
