<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            'title' => "日本銀行",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'title' => "Paypal",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('payments')->insert([
            'title' => "Payoneer",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('payments')->insert([
            'title' => "Wise",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
