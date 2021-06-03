<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'team_name'=>$this->faker->name,
            'game_id'=>Game::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at'=>now(),
        ];
    }
}
