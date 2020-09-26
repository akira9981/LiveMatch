<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        [
            'name' => 'test１',
            'age' => 20,
            'gender' => 1,
            'profile' => 'testtesttesttesttesttest',
            'email' => 'test@gmail.com',
            'password' => '$2y$10$9PGTNLdq3cp9onaO8pirUuCqpUCsFF33GLHC4Y10e0izYBjf2UqSe'
        ],
        [
            'name' => 'test2',
            'age' => 100,
            'gender' => 2,
            'profile' => 'ああああああああああああああ',
            'email' => 'test2@gmail.com',
            'password' => '$2y$10$9PGTNLdq3cp9onaO8pirUuCqpUCsFF33GLHC4Y10e0izYBjf2UqSe'
        ],
        [
            'name' => 'test3',
            'age' => 5,
            'gender' => 1,
            'profile' => '@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@',
            'email' => 'test3@gmail.com',
            'password' => '$2y$10$9PGTNLdq3cp9onaO8pirUuCqpUCsFF33GLHC4Y10e0izYBjf2UqSe'
        ],
      ]);
    }
}
