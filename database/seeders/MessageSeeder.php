<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('messages')->insert([
            'sender_id' => 1,
            'receiver_id' => 2,
            'read_at' => now(),
            'del_flag' => false,
            'content' => "こんにちは",
            'first_sentence' => "あ",
        ]);
        DB::table('messages')->insert([
            'sender_id' => 2,
            'receiver_id' => 3,
            'read_at' => now(),
            'del_flag' => false,
            'content' => "日本語",
            'first_sentence' => "た",
        ]);
        DB::table('messages')->insert([
            'sender_id' => 1,
            'receiver_id' => 3,
            'read_at' => now(),
            'del_flag' => false,
            'content' => "よろしくお願いします。",
            'first_sentence' => "みみ",
        ]);
        DB::table('messages')->insert([
            'sender_id' => 2,
            'receiver_id' => 3,
            'read_at' => now(),
            'del_flag' => false,
            'content' => "初めまして",
            'first_sentence' => "ようこそ",
        ]);
        DB::table('messages')->insert([
            'sender_id' => 3,
            'receiver_id' => 1,
            'read_at' => now(),
            'del_flag' => false,
            'content' => "すみません",
            'first_sentence' => "か",
        ]);
        DB::table('messages')->insert([
            'sender_id' => 1,
            'receiver_id' => 3,
            'read_at' => now(),
            'del_flag' => false,
            'content' => "おはようございます。",
            'first_sentence' => "さ",
        ]);

    }
}
