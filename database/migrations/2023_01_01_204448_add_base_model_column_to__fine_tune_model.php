<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBaseModelColumnToFineTuneModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dreambooth_models', function (Blueprint $table) {
            // add column
            $table->string('base_model')->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dreambooth_models', function (Blueprint $table) {
            $table->dropColumn('base_model');
        });
    }
}
