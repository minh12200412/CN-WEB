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
        Schema::create('hardware_devices', function (Blueprint $table) {
            $table->id();
            $table->string('device_name'); // Tên thiết bị
            $table->string('type'); // Loại thiết bị (Mouse, Keyboard, Headset)
            $table->boolean('status')->default(true); // Trạng thái hoạt động (true = Đang hoạt động, false = Hỏng)
            $table->unsignedBigInteger('center_id'); // Khóa ngoại, liên kết với bảng it_centers
            $table->foreign('center_id')->references('id')->on('it_centers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware_devices');
    }
};