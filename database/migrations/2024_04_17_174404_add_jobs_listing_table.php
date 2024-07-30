<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJobsListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_listing', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->mediumText('description')->nullable();
            $table->string('location');
            $table->mediumText('features')->nullable();
            $table->mediumText('requirements')->nullable();
            $table->enum('status', ['Active', 'Closed']);
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
        Schema::dropIfExists('jobs_listing');
    }
}
