<?php

namespace Database\Factories;

use App\Models\CropsQuestion;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class CropsQuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CropsQuestion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sub_category_id'=> SubCategory::factory(),
            'grain_varieties' => $this->faker->sentence,
            'soil_type' => $this->faker->sentence,
            'title' => $this->faker->paragraph,
            'details' => $this->faker->paragraph,
            'image' => $this->faker->image('public/storage/crops_question_image',640,480, null, false),
        ];
    }
}
