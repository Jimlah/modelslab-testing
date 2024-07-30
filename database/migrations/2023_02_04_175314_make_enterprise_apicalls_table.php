<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeEnterpriseApicallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprise_api_requests', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('server_id');
            $table->string('track_id');
            $table->text('output');
            $table->text('response_dump');
            $table->text('webhook');
            $table->text('trials');
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
        Schema::dropIfExists('enterprise_api_requests');
    }
}
