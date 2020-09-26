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
            'user_id' => 5,
            'meetings_id' => 2,
        ],
        [
            'user_id' => 6,
            'meetings_id' => 1,
        ],
        [
            'user_id' => 5,
            'meetings_id' => 3,
        ],
        [
            'user_id' => 7,
            'meetings_id' => 1,
        ],
      ]);
    }
}
