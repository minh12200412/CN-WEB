<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class computer_issues_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Tạo 20 máy tính giả

        $operatingSystems = ['Windows 10', 'Windows 11', 'macOS', 'Linux'];
        $cpuBrands = ['Intel', 'AMD', 'Ryzen'];
        $cpuModels = ['Core i5', 'Core i7', 'Ryzen 5', 'Ryzen 7'];

        for ($i = 0; $i < 20; $i++) {
            DB::table('computers')->insert([
                'computer_name' => "Lab" . rand(1, 5) . "-PC" . str_pad($i + 1, 2, '0', STR_PAD_LEFT),
                'model' => $faker->word() . ' ' . $faker->randomNumber(4, true),
                'operating_system' => $faker->randomElement($operatingSystems),
                'processor' => $faker->randomElement($cpuBrands) . ' ' . $faker->randomElement($cpuModels),
                'memory' => $faker->randomNumber(2, 2), // RAM từ 4GB đến 16GB
                'available' => $faker->boolean(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Tạo 50 vấn đề giả
        for ($i = 0; $i < 50; $i++) {
            $computerId = rand(1, 20); // Chọn ngẫu nhiên một máy tính
            DB::table('issues')->insert([
                'computer_id' => $computerId,
                'reported_by' => $faker->name,
                'reported_date' => $faker->dateTimeBetween('-1 week', 'now'),
                'description' => $faker->paragraph(2), // Mô tả 2 đoạn văn
                'urgency' => $faker->randomElement(['Low', 'Medium', 'High']),
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}