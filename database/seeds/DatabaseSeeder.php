<?php

use App\Article;
use App\Category;
use App\User;
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
        factory(User::class, 3)->create();
        factory(Category::class, 5)->create();
        factory(Article::class, 20)->create();
    }
}
