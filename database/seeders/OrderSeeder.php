<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('orders')->insert([

                'product_id' => $faker->numberBetween(1, 10),
                'provider_id' => $faker->numberBetween(1, 10),
                'partner_id' => $faker->numberBetween(1, 10),
                'customer_id' => $faker->numberBetween(1, 10),

                'reference' => $faker->word,
                'order_number' => $faker->word,
                'order_date' => $faker->date,
                'name' => $faker->name,
                'telephone' => $faker->phoneNumber,
                'address' => $faker->address,
                'city' => $faker->city,
                'postal_code' => $faker->postcode,
                'country' => $faker->country,
                'email' => $faker->email,
                'order_price' => $faker->numberBetween(1, 10),
                'tracking_number' => $faker->numberBetween(1, 10),
                'created_at' => now(),
                'updated_at' => now(),

            ]);
        }
    }
}
