<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('providers')->insert([
                'provider_name' => $faker->name,
                'url' => $faker->url,
                'api_key' => $faker->uuid,
                'secret_key' => $faker->uuid,
                'url_create' => $faker->randomDigit(),
                'url_read' => $faker->randomDigit(),
                'url_update' => $faker->randomDigit(),
                'url_delete' => $faker->randomDigit(),
                'url_confirm' => $faker->randomDigit(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
