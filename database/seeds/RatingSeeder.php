<?php

use App\Traits\HasUuid;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Rating::class, 5)->create();
    }
}
