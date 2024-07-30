<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFinetuneModelAddLoadBalancer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dreambooth_models', function (Blueprint $table) {
            $table->string('under_load')->nullable()->default(0);
            $table->string('lb_url_1')->nullable();
            $table->string('lb_url_2')->nullable();
            $table->string('lb_url_3')->nullable();
            $table->string('lb_url_4')->nullable();
            $table->string('lb_url_5')->nullable();
            $table->string('lb_url_6')->nullable();
            $table->string('lb_url_7')->nullable();
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
            $table->dropColumn('under_load');
            $table->dropColumn('lb_url_1');
            $table->dropColumn('lb_url_2');
            $table->dropColumn('lb_url_3');
            $table->dropColumn('lb_url_4');
            $table->dropColumn('lb_url_5');
            $table->dropColumn('lb_url_6');
            $table->dropColumn('lb_url_7');
        });
    }
}
