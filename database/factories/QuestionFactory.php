<?php

namespace Database\Factories;

use App\Models\EndUser;
use App\Models\Question;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'end_user_id'=> EndUser::factory(),
            'sub_category_id'=> SubCategory::factory(),
            'grain' => $this->faker->paragraph,
            'soil_type' => $this->faker->paragraph,
            'title' => $this->faker->paragraph,
            'details' => $this->faker->paragraph,
            'image' => $this->faker->image,
            //
        ];
    }
}
