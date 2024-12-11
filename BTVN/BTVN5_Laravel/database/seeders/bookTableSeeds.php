<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class bookTableSeeds extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) { // Ví dụ: tạo 100 cuốn sách
            $libraryId = rand(1, 10); // Giả sử bạn có 10 thư viện, lấy ngẫu nhiên id từ 1 đến 10
    
            DB::table('books')->insert([
                'title' => $faker->sentence, // Tên sách
                'author' => $faker->name, // Tác giả
                'publication_year' => $faker->year, // Năm xuất bản
                'genre' => $faker->word, // Thể loại
                'library_id' => $libraryId, // Liên kết với thư viện thông qua library_id
            ]);
        }
    }
}