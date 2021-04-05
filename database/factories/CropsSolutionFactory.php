<?php

namespace Database\Factories;

use App\Models\CropsQuestion;
use App\Models\CropsSolution;
use Illuminate\Database\Eloquent\Factories\Factory;

class CropsSolutionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CropsSolution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question_id'=> CropsQuestion::factory(),
            'title' => $this->faker->sentence,
            'details' => $this->faker->paragraph,
            'image' => $this->faker->image
        ];
    }
}
