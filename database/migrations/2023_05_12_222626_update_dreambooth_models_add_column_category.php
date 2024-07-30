<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDreamboothModelsAddColumnCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dreambooth_models', function (Blueprint $table) {
            $table->string('model_category')->after('model_name');
            $table->string('model_subcategory')->after('model_name')->nullable();
            $table->string('model_format')->after('model_name')->nullable();
        });
        // update model_category and other columns from existing data
        // $models = DB::table('dreambooth_models')->select('id', 'model_kind', 'type')->get();
        // foreach ($models as $model) {
        //     if ($model->model_kind == 'diffusers') {
        //         $model_category = 'stable_diffusion';
        //         $model_subcategory = null;
        //         $model_format = 'diffusers';
        //     }
        //     if ($model->model_kind == 'lora') {
        //         $model_category = 'lora';
        //         $model_subcategory = null;
        //         $model_format = 'safetensors';
        //     }
        //     if ($model->model_kind == 'embeddings') {
        //         $model_category = 'embeddings';
        //         $model_subcategory = null;
        //         $model_format = 'pt';
        //     }
        //     if ($model->model_kind == 'controlnet') {
        //         $model_category = 'controlnet';
        //         $model_subcategory = $model->type;
        //         $model_format = 'diffusers';
        //     }
        //     # raw upadte query

        //     DB::statement("UPDATE dreambooth_models SET model_category = '$model_category', model_subcategory = '$model_subcategory', model_format = '$model_format' WHERE id = $model->id");
        //}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
