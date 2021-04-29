<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Content;
use App\Models\EndUser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'end_user_id'=> EndUser::factory(),
            'content_id'=> Content::factory(),
            'details' => $this->faker->paragraph,
        ];
    }
}
