<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ErrorLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_error_logs', function (Blueprint $table) {
            $table->id();
            $table->string('error_uuid');
            $table->string('user_id')->nullable();
            $table->string('request_type')->nullable();
            $table->string('http_code')->nullable();
            $table->string('server_id')->nullable();
            $table->longText('error')->nullable();
            $table->longText('request_json')->nullable();
            $table->longText('response_json')->nullable();
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
        //
    }
}
