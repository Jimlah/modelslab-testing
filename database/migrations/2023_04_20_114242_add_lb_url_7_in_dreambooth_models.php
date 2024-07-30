<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLbUrl7InDreamboothModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dreambooth_models', function (Blueprint $table) {
            $table->string('lb_url_8')->nullable();
            $table->string('lb_url_9')->nullable();
            $table->string('lb_url_10')->nullable();
            $table->string('lb_url_11')->nullable();
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
            $table->dropColumn('lb_url_8');
            $table->dropColumn('lb_url_9');
            $table->dropColumn('lb_url_10');
            $table->dropColumn('lb_url_11');
        });
    }
}
