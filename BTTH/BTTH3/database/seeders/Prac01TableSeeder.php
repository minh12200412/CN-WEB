<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Prac01TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('medicines')->insert([
                'name' => $faker->word,
                'brand' => $faker->word,
                'dosage' => $faker->word,
                'form' => $faker->word,
                'price' => $faker->randomFloat(2, 10, 100),
                'stock' => $faker->randomNumber(3),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        for ($i = 0; $i < 50; $i++) {
            DB::table('sales')->insert([
                'medicine_id' => $faker->numberBetween(1, 20),
                'quantity' => $faker->randomNumber(2),
                'sale_date' => $faker->dateTimeBetween('-1 year', 'now'),
                'customer_phone' => $faker->phoneNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}