<?php

namespace Database\Factories;

use App\Models\Content;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Content::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->paragraph,
            'details' => $this->faker->paragraph,
            'image' => $this->faker->image,
        ];
    }
}
