<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDreamboothModelsAddColumnModelsKind extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dreambooth_models', function (Blueprint $table) {
            $table->string('model_kind')->default('diffusers');
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
            $table->dropColumn('model_kind');
        });
    }
}
