<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunityFeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('community_feeds', function (Blueprint $table) {
            $table->id();
            $table->string('image_url');
            $table->longText('prompt');
            $table->longText('negative_prompt')->nullable();
            $table->string('model_id')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('seed')->nullable();
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('community_feeds');
    }
}
