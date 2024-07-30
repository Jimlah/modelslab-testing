<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLoadBalancerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_loadbalancer', function (Blueprint $table) {
            $table->id();
            $table->string('model_id');
            $table->string('server_link');
            $table->timestamps();
            $table->index(['model_id', 'server_link']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the table
        Schema::dropIfExists('model_loadbalancer');
    }
}
