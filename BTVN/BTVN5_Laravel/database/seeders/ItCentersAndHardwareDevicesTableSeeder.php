<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ItCentersAndHardwareDevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Tạo dữ liệu cho bảng 'it_centers'
        for ($i = 0; $i < 5; $i++) { // Giả sử tạo 5 trung tâm
            $centerId = DB::table('it_centers')->insertGetId([
                'name' => $faker->company . ' Tin học', // Tên trung tâm
                'location' => $faker->address, // Địa điểm
                'contact_email' => $faker->companyEmail, // Email liên hệ
            ]);
    
            // Tạo dữ liệu cho bảng 'hardware_devices' liên kết với trung tâm
            for ($j = 0; $j < 10; $j++) { // Mỗi trung tâm có thể có 10 thiết bị
                DB::table('hardware_devices')->insert([
                    'device_name' => $faker->word . ' ' . $faker->randomDigitNotNull, // Tên thiết bị
                    'type' => $faker->randomElement(['Mouse', 'Keyboard', 'Headset']), // Loại thiết bị
                    'status' => $faker->boolean, // Trạng thái thiết bị (true = Đang hoạt động, false = Hỏng)
                    'center_id' => $centerId, // Liên kết với trung tâm
                ]);
            }
        }
    }
}