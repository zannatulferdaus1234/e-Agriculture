<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->longText('index')              ->nullable();
            $table->longText('lifespan')           ->nullable();
            $table->longText('breed_innovation')   ->nullable();
            $table->longText('land_selection')     ->nullable();
            $table->longText('seed_picking')       ->nullable();
            $table->longText('seedbed_preparation')->nullable();
            $table->longText('seedbed_care')       ->nullable();
            $table->longText('land_preparation')   ->nullable();
            $table->longText('planting_distance')  ->nullable();
            $table->longText('seedlings')          ->nullable();
            $table->longText('weed_control')       ->nullable();
            $table->longText('fertilizer')         ->nullable();
            $table->longText('irrigation')         ->nullable();
            $table->longText('pest')               ->nullable();
            $table->longText('insect')             ->nullable();
            $table->longText('disease')            ->nullable();
            $table->longText('harvesting')         ->nullable();
            $table->longText('yield')              ->nullable();

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
        Schema::dropIfExists('sub_categories');
    }
}
