<?php

namespace Database\Factories;

use App\Models\EndUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class EndUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EndUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->phoneNumber,
            'avatar' => $this->faker->image,
            'password' => '$2y$10$alSwPfiVK/ngdGMGbqXOqOdA78p7jaCkLxSP53BmQunFcKBT9xJ/.', // password
            'remember_token' => Str::random(10),
        ];
    }
}
