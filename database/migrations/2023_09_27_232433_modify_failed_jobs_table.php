<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class ModifyFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        # check if table does not exists
        if (Schema::hasTable('failed_jobs')) {
            DB::statement("ALTER TABLE failed_jobs MODIFY uuid VARCHAR(255) DEFAULT (UUID());");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE failed_jobs MODIFY uuid VARCHAR(255);");
    }
}
