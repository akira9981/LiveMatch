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
            'title' => 'サマソニ１日目！',
            'capacity' => 3,
            'detail' => '誰でもOKです。',
            'user_id' => 1,
            'created_at' => '2020-11-10 10:49:58',
            'updated_at' => '2020-11-10 10:49:58'
        ],
        [
            'title' => 'fuji rock ３日間',
            'capacity' => 2,
            'detail' => '同年代の方でお願いします。',
            'user_id' => 2,
            'created_at' => '2020-11-10 10:50:58',
            'updated_at' => '2020-11-10 10:50:58'
        ],
        [
            'title' => 'ホルモン zepp難波',
            'capacity' => 8,
            'detail' => 'ホルモン好き　誰でも。',
            'user_id' => 3,
            'created_at' => '2020-11-10 10:51:58',
            'updated_at' => '2020-11-10 10:51:58'
        ],
        [
            'title' => 'ミスチル 舞踏館',
            'capacity' => 5,
            'detail' => 'ミスチル好き　誰でも。',
            'user_id' => 4,
            'created_at' => '2020-11-10 10:52:58',
            'updated_at' => '2020-11-10 10:52:58'
        ],
        [
            'title' => 'ヒゲダン　名古屋',
            'capacity' => 2,
            'detail' => 'ヒゲダン好き　誰でも。',
            'user_id' => 5,
            'created_at' => '2020-11-10 10:53:58',
            'updated_at' => '2020-11-10 10:53:58'
        ],
        [
            'title' => '大阪見放題　2020',
            'capacity' => 5,
            'detail' => 'ニガミ以外　どこでも',
            'user_id' => 1,
            'created_at' => '2020-11-10 10:54:58',
            'updated_at' => '2020-11-10 10:54:58'
        ],
        [
            'title' => 'Lisa 東京公演',
            'capacity' => 20,
            'detail' => '最前　死守',
            'user_id' => 2,
            'created_at' => '2020-11-10 10:55:58',
            'updated_at' => '2020-11-10 10:55:58'
        ],
        [
            'title' => 'キングヌー 東京公演',
            'capacity' => 20,
            'detail' => '最前　死守',
            'user_id' => 3,
            'created_at' => '2020-11-10 10:56:58',
            'updated_at' => '2020-11-10 10:56:58'
        ],
        [
            'title' => 'クリーピーナッツ 東京公演',
            'capacity' => 2,
            'detail' => '最前　死守',
            'user_id' => 4,
            'created_at' => '2020-11-10 10:57:58',
            'updated_at' => '2020-11-10 10:57:58'
        ],
        [
            'title' => 'ホロライブ 東京公演',
            'capacity' => 6,
            'detail' => '最前　死守',
            'user_id' => 5,
            'created_at' => '2020-11-10 10:58:58',
            'updated_at' => '2020-11-10 10:58:58'
        ],
        [
            'title' => 'ノットフェス　tokyo',
            'capacity' => 6,
            'detail' => '最前　死守',
            'user_id' => 1,
            'created_at' => '2020-11-10 10:59:58',
            'updated_at' => '2020-11-10 10:59:58'
        ],
        [
            'title' => 'CDJ ２日間',
            'capacity' => 2,
            'detail' => 'チケット定価で譲ります。',
            'user_id' => 2,
            'created_at' => '2020-11-10 10:59:59',
            'updated_at' => '2020-11-10 10:59:59'
        ],
        [
            'title' => 'CDJ 最終日',
            'capacity' => 2,
            'detail' => 'チケット定価で譲ります。',
            'user_id' => 4,
            'created_at' => '2020-11-11 10:59:59',
            'updated_at' => '2020-11-11 10:59:59'
        ],
      ]);
    }
}
