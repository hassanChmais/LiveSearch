<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Round;
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
            'game_name'=>$this->faker->name,
            'round_id'=>Round::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at'=>now(),
        ];
    }
}
