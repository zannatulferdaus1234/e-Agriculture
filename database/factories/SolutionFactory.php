<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Solution;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolutionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Solution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> User::factory(),
            'question_id'=> Question::factory(),
            'details' => $this->faker->paragraph,
        ];
    }
}
