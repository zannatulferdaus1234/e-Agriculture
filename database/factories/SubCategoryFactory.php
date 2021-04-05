<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class SubCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=> Category::factory(),
            'name' => $this->faker->name,
            'index' => $this->faker->paragraph,
            'lifespan' => $this->faker->sentence,
            'breed_innovation' => $this->faker->sentence,
            'land_selection' => $this->faker->paragraph,
            'seed_picking' => $this->faker->paragraph,
            'seedbed_preparation' => $this->faker->paragraph,
            'seedbed_care' => $this->faker->paragraph,
            'land_preparation' => $this->faker->paragraph,
            'planting_distance' => $this->faker->paragraph,
            'seedlings' => $this->faker->paragraph,
            'weed_control' => $this->faker->paragraph,
            'fertilizer' => $this->faker->paragraph,
            'irrigation' => $this->faker->paragraph,
            'pest' => $this->faker->paragraph,
            'insect' => $this->faker->paragraph,
            'disease' => $this->faker->paragraph,
            'harvesting' => $this->faker->paragraph,
            'yield' => $this->faker->paragraph,
        ];
    }
}
