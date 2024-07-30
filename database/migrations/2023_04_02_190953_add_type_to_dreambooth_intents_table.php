<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypeToDreamboothIntentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dreambooth_intents', function (Blueprint $table) {
            if (!Schema::hasColumn('dreambooth_intents', 'type')) {
                $table->string('type')->default('dreambooth')->after('payment_method_id');
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
        Schema::table('dreambooth_intents', function (Blueprint $table) {
            //
        });
    }
}
