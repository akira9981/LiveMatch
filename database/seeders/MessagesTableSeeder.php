<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            [
                'send' => '1',
                'recieve' => '2',
                'message' => 'こんにちは',
                'created_at' => '2020-10-13 04:25:16'
            ],
            [
                'send' => '2',
                'recieve' => '1',
                'message' => 'こんにちはです',
                'created_at' => '2020-10-13 04:26:16'
            ],
            [
                'send' => '1',
                'recieve' => '2',
                'message' => 'さようなら',
                'created_at' => '2020-10-13 04:27:16'
            ],
            [
                'send' => '2',
                'recieve' => '3',
                'message' => 'こんにちは',
                'created_at' => '2020-10-13 04:25:16'
            ],
            [
                'send' => '3',
                'recieve' => '2',
                'message' => 'こんにちは!',
                'created_at' => '2020-10-13 04:26:16'
            ],
        ]);
    }
}
