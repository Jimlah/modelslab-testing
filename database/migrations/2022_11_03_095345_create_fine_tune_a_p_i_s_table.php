<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFineTuneAPISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dreambooth_models', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('user_id');
            $table->string('model_id')->nullable();
            $table->string('deploy_status')->nullable();
            $table->string('deploy_link')->nullable();
            $table->string('storage_link')->nullable();
            $table->text('train_request_dump')->nullable();
            $table->text('train_response_dump')->nullable();
            $table->text('train_server_link')->nullable();
            $table->text('train_server_id')->nullable();
            $table->text('logs')->nullable();
            $table->text('extra_1')->nullable();
            $table->text('extra_2')->nullable();
            $table->text('extra_3')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('dreambooth_models');
    }
}
