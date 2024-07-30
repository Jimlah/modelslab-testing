<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsDefaultToApiKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('api_keys', function (Blueprint $table) {
            if (!Schema::hasColumn('api_keys', 'is_default')) {
                $table->boolean('is_default')->default(1)->after('notes');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('api_keys', function (Blueprint $table) {
            //
        });
    }
}
