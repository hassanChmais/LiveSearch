<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	//\App\Models\Article::factory(2)->create();
        // \App\Models\User::factory(10)->create();
        //$this->call(ArticlesTableSeeder::class);
        $this->call(RoundSeeder::class);
        //$this->call(GameSeeder::class);
        //$this->call(TeamSeeder::class);

        
    }
}
