<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('status');
            $table->text('request_dump');
            $table->text('response_id');
            $table->text('response_dump');
            $table->text('output')->nullable();;
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
        Schema::dropIfExists('api_requests');
    }
}
