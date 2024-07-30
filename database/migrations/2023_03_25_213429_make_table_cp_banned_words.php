<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeTableCpBannedWords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cp_banned_words', function (Blueprint $table) {
            $table->id();
            $table->string('word')->index();
        });
        // Insert some stuff
        $banned = array(
            'young',
            'princess',
            'year',
            'years',
            'age',
            'years old',
            'year old',
            'boy age',
            'girl age',
            'preteen',
            'boy age',
            'child',
            'children',
            'kids',
            'kid',
            'teenage',
            'young girl',
            'sweet girl',
            'school girl',
            'school uniform',
            'schoolgirl',
            'young beautiful girl',
            'schoolgirls',
            'little girl',
            '4>=7',
            'adolescent',
            'yo'
        );
        // insert words
        foreach ($banned as $key => $value) {
            DB::table('cp_banned_words')->insert([
                'word' => $value,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cp_banned_words');
    }
}
