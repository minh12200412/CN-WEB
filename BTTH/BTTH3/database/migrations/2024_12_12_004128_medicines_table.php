<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id('medicine_id'); // Mã thuốc
            $table->string('name', 255); // Tên thuốc
            $table->string('brand', 100)->nullable(); // Thương hiệu (tùy chọn)
            $table->string('dosage', 50); // Thông tin liều lượng (ví dụ., 10mg tablets)
            $table->string('form', 50); // Dạng thuốc (viên nén, viên nang, xi-rô, v.v.)
            $table->decimal('price', 10, 2); // Giá trên một đơn vị thuốc
            $table->integer('stock'); // Số lượng tồn trong kho
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};