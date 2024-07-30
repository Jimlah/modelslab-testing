<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers_list', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->text('server_link')->nullable();
            $table->text('server_type')->nullable();
            $table->text('max_limit')->nullable();
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
        Schema::dropIfExists('servers_list');
    }
}
