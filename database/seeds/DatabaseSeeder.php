<?php

use Illuminate\Database\Seeder;
use App\Petition;
use App\Author;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //Petition::factory(50)->create();
        factory(Petition::class, 15)->create();
        factory(Author::class, 15)->create();
    }
}
