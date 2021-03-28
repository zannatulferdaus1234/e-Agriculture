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
            'index' => $this->faker->sentence,
            'lifespan' => $this->faker->sentence,
            'breed_innovation' => $this->faker->sentence,
            'land_selection' => $this->faker->sentence,
            'seed_picking' => $this->faker->sentence,
            'seedbed_preparation' => $this->faker->sentence,
            'seedbed_care' => $this->faker->sentence,
            'land_preparation' => $this->faker->sentence,
            'planting_distance' => $this->faker->sentence,
            'seedlings' => $this->faker->sentence,
            'weed_control' => $this->faker->sentence,
            'fertilizer' => $this->faker->sentence,
            'irrigation' => $this->faker->sentence,
            'pest' => $this->faker->sentence,
            'insect' => $this->faker->sentence,
            'disease' => $this->faker->sentence,
            'harvesting' => $this->faker->sentence,
            'yield' => $this->faker->sentence,
            'images' =>   $this->faker->image,
        ];
    }
}
