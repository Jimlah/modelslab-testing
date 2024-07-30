<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOnboardingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_onboarding', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('full_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('company')->nullable();
            $table->string('industry')->nullable();
            $table->string('company_size')->nullable();
            $table->string('use_case')->nullable();
            $table->string('find_us')->nullable();
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
        Schema::dropIfExists('user_onboarding');
    }
}
