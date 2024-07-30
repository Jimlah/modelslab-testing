<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommentTableToTestimonial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('testimonials', function (Blueprint $table) {
            $table->string('comment')->after('title')->nullable();
            $table->string('author')->nullable();
            $table->string('type')->default('home');
            $table->string('designation')->nullable();
            $table->string('title')->nullable()->change();
            $table->string('image')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropColumn('comment');
            $table->dropColumn('author');
            $table->dropColumn('type');
            $table->dropColumn('designation');
            $table->string('title')->change();
            $table->string('image')->change();
        });
    }
}
