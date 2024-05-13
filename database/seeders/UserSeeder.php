<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nickname' => "ceo",
            'email' => "ceo@gmail.com",
            'role_id' => "1",
            'password' => Hash::make('ceo'),
            'email_verified_at' => now(),
            'other' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'nickname' => "Admin",
            'email' => "admin@gmail.com",
            'role_id' => "2",
            'password' => Hash::make('admin'),
            'email_verified_at' => now(),
            'other' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'nickname' => "Member2",
            'email' => "member2@gmail.com",
            'role_id' => "4",
            'password' => Hash::make('member2'),
            'email_verified_at' => now(),
            'other' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
