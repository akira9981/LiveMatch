<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MeetingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('meetings')->insert([
        [
            'title' => 'title1',
            'capacity' => 3,
            'detail' => 'Anyone OK',
            'image' => 's3 URL',
            'user_id' => 5,
        ],
        [
            'title' => 'title2',
            'capacity' => 10,
            'detail' => 'Anyone OK',
            'image' => 's3 URL',
            'user_id' => 6,
        ],
        [
            'title' => 'title3',
            'capacity' => 100,
            'detail' => 'Anyone OK',
            'image' => 's3 URL',
            'user_id' => 7,
        ],
      ]);
    }
}
