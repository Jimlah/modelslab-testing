<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProxyLinksToEnterpriseApiRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enterprise_api_requests', function (Blueprint $table) {
            $table->longText('proxy_links')->after('trials')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enterprise_api_requests', function (Blueprint $table) {
            //
        });
    }
}
