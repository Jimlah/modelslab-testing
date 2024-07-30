<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateApiRequestsAddTemp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('api_requests', function (Blueprint $table) {
            $table->string('temp')->nullable();
            $table->string('response_id')->nullable()->change();
            $table->longText('request_dump')->nullable()->change();
            $table->longText('response_dump')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('api_requests', function (Blueprint $table) {
            $table->dropColumn('temp');
            $table->longText('request_dump')->change();
            $table->longText('response_dump')->change();
        });
    }
}
