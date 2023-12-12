<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        User::factory(1)->create(
            [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('123456Aa@'),
            ]
        );
    }
}
