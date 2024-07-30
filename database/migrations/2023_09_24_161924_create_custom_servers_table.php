<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_servers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('type');
            $table->string('status');
            $table->string('server_no');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->boolean('has_started')->default(false);
            $table->string('schedule')->nullable();
            $table->boolean('create_now')->default(false);
            $table->string('timezone')->nullable();
            $table->string('start_time')->nullable();
            $table->string('hour_number')->nullable();
            $table->string('last_updated_date')->nullable();
            $table->boolean('model_synced')->default(false);
            $table->string('amount_spent')->default(0);
            $table->string('server_created')->default(0);
            $table->string('plan_name')->nullable();
            $table->longText('available_servers')->nullable();
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
        Schema::dropIfExists('custom_servers');
    }
}
