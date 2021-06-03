<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use \App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\Article::factory(2)->create();
    }
}
