<?php

use App\Models\Article;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Facade;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = factory(Role::class)->create();
//         $this->call(UserSeeder::class);
        factory(User::class,5)->create()->each(function ($user) use ($roles) {
            $user->roles()->sync($roles);
        });
//        factory(Contact::class, 20)->create();
//        $this->call(TransactionsTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PhoneSeeder::class);
        $this->call(ContactSeeder::class);
        //$this->call(Article::class);
        $this->call(\App\Models\Book::class);
        $this->call(\App\Models\Rating::class);

    }
}
