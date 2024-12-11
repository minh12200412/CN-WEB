<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CinemasAndMoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

    // Tạo dữ liệu cho bảng 'cinemas'
    for ($i = 0; $i < 5; $i++) { // Giả sử tạo 5 rạp chiếu
        $cinemaId = DB::table('cinemas')->insertGetId([
            'name' => $faker->company . ' Cinema', // Tên rạp chiếu
            'location' => $faker->address, // Địa chỉ rạp chiếu
            'total_seats' => $faker->numberBetween(100, 500), // Tổng số ghế ngồi (giả sử từ 100 đến 500 ghế)
        ]);

        // Tạo dữ liệu cho bảng 'movies' liên kết với rạp chiếu
        for ($j = 0; $j < 10; $j++) { // Mỗi rạp chiếu có thể có 10 phim
            DB::table('movies')->insert([
                'title' => $faker->sentence, // Tên phim
                'director' => $faker->name, // Đạo diễn
                'release_date' => $faker->date, // Ngày phát hành
                'duration' => $faker->numberBetween(90, 180), // Thời lượng phim (giả sử từ 90 đến 180 phút)
                'cinema_id' => $cinemaId, // Liên kết với rạp chiếu
            ]);
        }
    }
    }
}