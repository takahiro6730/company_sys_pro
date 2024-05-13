<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('units')->insert([
            'title' => "JPY(￥)",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('units')->insert([
            'title' => "USD($)",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('units')->insert([
            'title' => "EUR(€)",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
