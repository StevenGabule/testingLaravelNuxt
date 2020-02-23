<?php

use App\Articles;
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
        factory(Articles::class, 10)->create();
        factory(User::class, 10)->create();
    }
}
