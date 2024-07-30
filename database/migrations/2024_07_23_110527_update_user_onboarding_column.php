<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserOnboardingColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_onboarding', function (Blueprint $table) {
            $table->string('other_use_case')->nullable()->after('use_case');
            $table->string('other_find_us')->nullable()->after('find_us');
			$table->string('role')->nullable()->after('is_complete');
			$table->string('image')->nullable()->after('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
