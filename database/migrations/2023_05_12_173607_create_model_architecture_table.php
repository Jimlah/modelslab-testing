<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelArchitectureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_architecture', function (Blueprint $table) {
            $table->id();
            $table->string('model_category');
            $table->string('model_subcategory');
            $table->string('model_default_format');
            $table->string('model_format');
            $table->timestamps();
            $table->index(['model_category', 'model_subcategory']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_architecture');
    }
}
