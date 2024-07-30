<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTagsToDreamboothModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dreambooth_models', function (Blueprint $table) {
            $table->string('tags')->nullable();
            $table->string('is_nsfw')->nullable();
            $table->string('type')->nullable();
            $table->text('model_download_link')->nullable();
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
            //
        });
    }
}
