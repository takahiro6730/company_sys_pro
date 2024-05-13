<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PaymentSeeder;
use Database\Seeders\UnitSeeder;
use Database\Seeders\MessageSeeder;
use Database\Seeders\VerifyQuestionSeeder;
use Database\Seeders\CountrySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            PaymentSeeder::class,
            UnitSeeder::class,
            MessageSeeder::class,
            VerifyQuestionSeeder::class,
            CountrySeeder::class,
        ]);
    }
}
