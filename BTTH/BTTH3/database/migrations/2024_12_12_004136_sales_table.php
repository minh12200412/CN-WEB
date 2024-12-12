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
        Schema::create('sales', function (Blueprint $table) {
            $table->id('sale_id'); // Mã giao dịch bán hàng
            $table->unsignedBigInteger('medicine_id'); // Khóa ngoại tham chiếu drug_id trong bảng Thuốc
            $table->foreign('medicine_id')->references('medicine_id')->on('medicines')->onDelete('cascade');
            $table->integer('quantity'); // Số lượng thuốc bán ra
            $table->dateTime('sale_date'); // Ngày giờ bán hàng
            $table->string('customer_phone', 20)->nullable(); // Số điện thoại người mua (tùy chọn)
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