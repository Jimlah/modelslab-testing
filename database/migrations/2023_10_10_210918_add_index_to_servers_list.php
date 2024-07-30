<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexToServersList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servers_list', function (Blueprint $table) {
            # change server_link to varchar 255 and add index
            $table->string('server_link', 255)->change();
            $table->index('server_link', 'server_link_index');
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
