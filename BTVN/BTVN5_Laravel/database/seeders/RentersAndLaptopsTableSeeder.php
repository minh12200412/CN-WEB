<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class RentersAndLaptopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

    // Tạo dữ liệu cho bảng 'renters'
    for ($i = 0; $i < 10; $i++) { // Giả sử tạo 10 người thuê
        $renterId = DB::table('renters')->insertGetId([
            'name' => $faker->name, // Tên người thuê
            'phone_number' => $faker->phoneNumber, // Số điện thoại
            'email' => $faker->email, // Email
        ]);

        // Tạo dữ liệu cho bảng 'laptops' liên kết với người thuê
        for ($j = 0; $j < 5; $j++) { // Mỗi người thuê sẽ thuê tối đa 5 laptop
            DB::table('laptops')->insert([
                'brand' => $faker->company, // Hãng laptop
                'model' => $faker->word, // Mẫu laptop
                'specifications' => $faker->word . ', ' . $faker->randomDigitNotNull . 'GB RAM', // Thông số kỹ thuật
                'rental_status' => true, // Đang cho thuê
                'renter_id' => $renterId, // Liên kết với người thuê
            ]);
        }
    }

    // Tạo thêm một số laptop chưa cho thuê
    for ($i = 0; $i < 20; $i++) { // Tạo thêm 20 laptop chưa cho thuê
        DB::table('laptops')->insert([
            'brand' => $faker->company,
            'model' => $faker->word,
            'specifications' => $faker->word . ', ' . $faker->randomDigitNotNull . 'GB RAM',
            'rental_status' => false, // Chưa cho thuê
            'renter_id' => null, // Chưa có người thuê
        ]);
    }
    }
}