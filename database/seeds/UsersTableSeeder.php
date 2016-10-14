<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'firstname' => 'Jane',
          'lastname' => 'Ravela',
          'email' => 'jane@gmail.com',
          'password' => bcrypt('111'),
          'roles_id' => '1',
      ]);
    }
}
