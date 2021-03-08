<?php

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
    	factory(\App\User::class, 10)->create();
    	factory(\App\Command::class, 20)->create();
    	factory(\App\Publicites::class, 10)->create();
    	factory(\App\Category::class, 15)->create();
    	factory(\App\ModePayments::class, 3);
    	factory(\App\Services::class, 15);
    	factory(\App\Prices::class, 100);
        // $this->call(UsersTableSeeder::class);
    }
}
