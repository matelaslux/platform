<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        foreach (range(1, 10) as $ignored) {
            DB::table('products')->insert([
                'category' => $faker->text,
                'product_name' => $faker->randomLetter,
                'product_description' => $faker->randomLetter,
                'product_price' => $faker->imageUrl(),
                'product_price_promo' => $faker->randomDigit(),
                'product_stock' => $faker->randomDigit(),
                'weight' => $faker->randomDigit(),
                'Height' => $faker->randomDigit(),
                'Width' => $faker->randomDigit(),
                'Depth' => $faker->randomDigit(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
