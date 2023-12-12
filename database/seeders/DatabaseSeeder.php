<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        for ($i = 0; $i < 100; $i++) {
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

}
