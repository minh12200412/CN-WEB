<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Prac02TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('classes')->insert([
                'grade_level' => $faker->randomElement(['Pre-K', 'Kindergarten']),
                'room_number' => $faker->randomNumber(2) . 'A', // Ví dụ: 12A, 03A
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Tạo một số học sinh giả
        for ($i = 0; $i < 50; $i++) {
            DB::table('students')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'date_of_birth' => $faker->date,
                'parent_phone' => $faker->phoneNumber,
                'class_id' => $faker->numberBetween(1, 10), // Chọn ngẫu nhiên một lớp
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}