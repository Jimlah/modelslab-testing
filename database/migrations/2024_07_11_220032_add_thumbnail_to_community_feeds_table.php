<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddThumbnailToCommunityFeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('community_feeds', function (Blueprint $table) {
            $table->renameColumn('image_url', 'output_url');
            $table->string('thumbnail')->nullable()->after('seed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('community_models', function (Blueprint $table) {
            //
        });
    }
}
