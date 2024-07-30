<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyApiReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('api_requests', function (Blueprint $table) {
            // check if the column exists before dropping it
            if (Schema::hasColumn('api_requests', 'generation_time')) {
                $table->dropColumn('generation_time');
            }
            if (Schema::hasColumn('api_requests', 'server_id')) {
                $table->dropColumn('server_id');
            }
            if (Schema::hasColumn('api_requests', 'response_id')) {
                $table->dropColumn('response_id');
            }
            //$table->dropIndex(['response_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // This is a destructive migration, so we don't want to reverse it.
    }
}
