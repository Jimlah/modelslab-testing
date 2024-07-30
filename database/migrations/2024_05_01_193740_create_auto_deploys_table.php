<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoDeploysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_deploys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('threshold_time'); //in seconds. The queue time you want the server to be auto deployed
            $table->string('deploy_type');
            $table->boolean('is_active')->default(false);
            $table->string('no_of_server'); /// no of server user wants to deploy once triggered
            $table->string('uptime'); // the number of hours the auto deployed server needs to be up 
            $table->string('overall_deployed_server')->default(0);
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
        Schema::dropIfExists('auto_deploys');
    }
}
