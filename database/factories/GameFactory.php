<?php

namespace Database\Factories;

use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->name(),
            'firstname' =>$this->faker->name(),
            'lastname' =>$this->faker->name(),
            'price' =>$this->faker->randomFloat(0, 2, 100),
            'pegi' =>$this->faker->randomNumber(),
        ];
    }
}
