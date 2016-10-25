<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
<<<<<<< HEAD
        $this>call(MenuCatTableSeeder::class);
=======
        $this->call(UsersTableSeeder::class);      
        $this->call(MenuCatTableSeeder::class);
>>>>>>> af4f51985c75c6eaa0ed8ccb263924fa9ca01a52
    }
}
