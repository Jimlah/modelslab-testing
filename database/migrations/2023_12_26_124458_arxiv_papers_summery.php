<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArxivPapersSummery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // arxiv_papers_summery
        Schema::create('arxiv_papers', function (Blueprint $table) {
            $table->id();
            $table->string('arxiv_id');
            $table->string('title');
            $table->string('authors');
            $table->longText('summary');
            $table->string('slug');
            $table->longText('body');
            $table->string('comment')->nullable();
            $table->string('journal_ref')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('categories')->nullable();
            $table->string('status');
            $table->string('license')->nullable();
            $table->longText('abstract')->nullable();
            $table->string('arxiv_url');
            $table->string('pdf_url');
            $table->string('published_date')->nullable();
            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // arxiv_papers_summery
        Schema::dropIfExists('arxiv_papers_summery');
    }
}
