<?php

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Article::class,5)->create();
    }
}