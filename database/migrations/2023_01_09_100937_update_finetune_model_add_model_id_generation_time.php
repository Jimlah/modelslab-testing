<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFinetuneModelAddModelIdGenerationTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('api_requests', function (Blueprint $table) {
            $table->string('model_id')->nullable();
            $table->string('generation_time')->nullable();
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
            $table->dropColumn('model_id');
            $table->dropColumn('generation_time');
        });
    }
}
