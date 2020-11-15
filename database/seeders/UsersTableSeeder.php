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
            'name' => 'test1',
            'age' => 20,
            'gender' => 'male',
            'profile' => '初めまして。よろしくお願いします',
            'email' => 'test@gmail.com',
            'password' => '$2y$10$9PGTNLdq3cp9onaO8pirUuCqpUCsFF33GLHC4Y10e0izYBjf2UqSe',
            'created_at' => '2020-11-10 08:59:58',
            'updated_at' => '2020-11-10 08:59:58'
        ],
        [
            'name' => 'test2',
            'age' => 21,
            'gender' => 'female',
            'profile' => 'こんにちわ！誰でもOK',
            'email' => 'test2@gmail.com',
            'password' => '$2y$10$9PGTNLdq3cp9onaO8pirUuCqpUCsFF33GLHC4Y10e0izYBjf2UqSe',
            'created_at' => '2020-11-10 08:59:58',
            'updated_at' => '2020-11-10 08:59:58'
        ],
        [
            'name' => 'test3',
            'age' => 27,
            'gender' => 'male',
            'profile' => 'ロック大好きです！',
            'email' => 'test3@gmail.com',
            'password' => '$2y$10$9PGTNLdq3cp9onaO8pirUuCqpUCsFF33GLHC4Y10e0izYBjf2UqSe',
            'created_at' => '2020-11-10 08:59:58',
            'updated_at' => '2020-11-10 08:59:58'
        ],
        [
            'name' => 'test4',
            'age' => 40,
            'gender' => 'female',
            'profile' => 'ジャズ大好きです！',
            'email' => 'test4@gmail.com',
            'password' => '$2y$10$9PGTNLdq3cp9onaO8pirUuCqpUCsFF33GLHC4Y10e0izYBjf2UqSe',
            'created_at' => '2020-11-10 08:59:58',
            'updated_at' => '2020-11-10 08:59:58'
        ],
        [
            'name' => 'test5',
            'age' => 33,
            'gender' => 'male',
            'profile' => 'EDM大好きです！',
            'email' => 'test5@gmail.com',
            'password' => '$2y$10$9PGTNLdq3cp9onaO8pirUuCqpUCsFF33GLHC4Y10e0izYBjf2UqSe',
            'created_at' => '2020-11-10 08:59:58',
            'updated_at' => '2020-11-10 08:59:58'
        ],
      ]);
    }
}
