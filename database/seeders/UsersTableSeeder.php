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
            'profile_photo_path' => 'https://live-match.s3.ap-northeast-1.amazonaws.com/live-match/rp2kKjRD5XJChzERnEZODwNN5kLe5GWlqyoQUcoV.jpeg',
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
            'profile_photo_path' => 'https://live-match.s3.ap-northeast-1.amazonaws.com/live-match/CnSL3TgrdRVx620M2Fn9onyoeFvpTtW6pnx9a4zZ.jpeg',
            'created_at' => '2020-11-10 08:59:58',
            'updated_at' => '2020-11-10 08:59:58'
        ],
        [
            'name' => 'test3',
            'age' => 27,
            'gender' => 'female',
            'profile' => 'ロック大好きです！',
            'email' => 'test3@gmail.com',
            'password' => '$2y$10$9PGTNLdq3cp9onaO8pirUuCqpUCsFF33GLHC4Y10e0izYBjf2UqSe',
            'profile_photo_path' => 'https://live-match.s3.ap-northeast-1.amazonaws.com/live-match/3HxBJGpejOtfscFRNF0otBkuyaLOtVFh8F7n9H5D.jpeg',
            'created_at' => '2020-11-10 08:59:58',
            'updated_at' => '2020-11-10 08:59:58'
        ],
        [
            'name' => 'test4',
            'age' => 40,
            'gender' => 'male',
            'profile' => 'ジャズ大好きです！',
            'email' => 'test4@gmail.com',
            'password' => '$2y$10$9PGTNLdq3cp9onaO8pirUuCqpUCsFF33GLHC4Y10e0izYBjf2UqSe',
            'profile_photo_path' => 'https://live-match.s3.ap-northeast-1.amazonaws.com/live-match/PG7zfUqJlSmSuI6aRoRF1CcaGZqjkWRoc7ZJ1n67.jpeg',
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
            'profile_photo_path' => 'https://live-match.s3.ap-northeast-1.amazonaws.com/live-match/9Who9h06VJrfaUgMWmuDNQIukuknLrktEWEXd90m.jpeg',
            'created_at' => '2020-11-10 08:59:58',
            'updated_at' => '2020-11-10 08:59:58'
        ],
        [
            'name' => 'test6',
            'age' => 24,
            'gender' => 'female',
            'profile' => 'メタル大好きです！',
            'email' => 'test6@gmail.com',
            'password' => '$2y$10$9PGTNLdq3cp9onaO8pirUuCqpUCsFF33GLHC4Y10e0izYBjf2UqSe',
            'profile_photo_path' => 'https://live-match.s3.ap-northeast-1.amazonaws.com/live-match/VU03irmyYVDSVxZ1JLwOtgnpfkAcTeUaTCp5Cjqr.jpeg',
            'created_at' => '2020-11-10 08:59:58',
            'updated_at' => '2020-11-10 08:59:58'
        ],
      ]);
    }
}
