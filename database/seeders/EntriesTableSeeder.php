<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('entries')->insert([
        [
            'user_id' => 1,
            'meetings_id' => 2,
            'created_at' => '2020-10-19 21:26:35'
        ],
        [
            'user_id' => 2,
            'meetings_id' => 3,
            'created_at' => '2020-10-19 21:26:35'
        ],
        [
            'user_id' => 3,
            'meetings_id' => 4,
            'created_at' => '2020-10-19 21:26:35'
        ],
        [
            'user_id' => 4,
            'meetings_id' => 5,
            'created_at' => '2020-10-19 21:26:35'
        ],
        [
            'user_id' => 5,
            'meetings_id' => 1,
            'created_at' => '2020-10-19 21:26:35'
        ],
        [
            'user_id' => 3,
            'meetings_id' => 6,
            'created_at' => '2020-10-19 21:26:35'
        ],
        [
            'user_id' => 1,
            'meetings_id' => 7,
            'created_at' => '2020-10-19 21:26:35'
        ],
        [
            'user_id' => 1,
            'meetings_id' => 8,
            'created_at' => '2020-10-19 21:26:35'
        ],
        [
            'user_id' => 1,
            'meetings_id' => 9,
            'created_at' => '2020-10-19 21:26:35'
        ],
        [
            'user_id' => 2,
            'meetings_id' => 10,
            'created_at' => '2020-10-19 21:26:35'
        ],
      ]);
    }
}
