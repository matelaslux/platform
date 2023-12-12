<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('partners')->insert([
                'user_id'=> User::all()->random()->id,
                'partner_name' => $faker->name,
                'username' => $faker->userName,
                'rib' => $faker->numberBetween(1000,100000),
                'count' => $faker->numberBetween(1,100),
                'telephone' => $faker->phoneNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
