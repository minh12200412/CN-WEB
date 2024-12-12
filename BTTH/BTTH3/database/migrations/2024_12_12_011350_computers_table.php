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
        Schema::create('computers', function (Blueprint $table) {
            $table->id('id')->comment('Mã máy tính');
            $table->string('computer_name', 50)->comment('Tên máy tính (ví dụ., "Lab1-PC05")');
            $table->string('model', 100)->comment('Tên phiên bản (ví dụ., "Dell Optiplex 7990")');
            $table->string('operating_system', 50)->comment('Hệ điều hành (ví dụ "Windows 10 Pro")');
            $table->string('processor', 50)->comment('Bộ vi xử lý (e.g., "Intel Core i5-11400")');
            $table->integer('memory')->comment('Bộ nhớ RAM (GB)');
            $table->boolean('available')->comment('Trạng thái hoạt động');
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