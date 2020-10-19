<?php

use App\Traits\HasUuid;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Book::class, 5)->create();
    }
}
