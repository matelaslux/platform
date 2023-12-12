<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
            ProviderSeeder::class,
            CustomerSeeder::class,
            PartnerSeeder::class,
            OrderSeeder::class,

        ]);

    }
}
