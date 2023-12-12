<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('customers')->insert([
                'customer_name' => $faker->name,
                'address' => $faker->address,
                'wilaya' => $faker->city,
                'commune' => $faker->city,
                'postal_code' => $faker->postcode(),
                'country' => env('DEFAULT_COUNTRY'),
                'email' => $faker->email,
                'telephone' => $faker->phoneNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
