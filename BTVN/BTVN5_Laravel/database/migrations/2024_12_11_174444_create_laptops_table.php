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
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->string('specifications');
            $table->boolean('rental_status')->default(false); // false = chưa cho thuê
            $table->unsignedBigInteger('renter_id')->nullable(); // Khóa ngoại, null nếu chưa cho thuê
            $table->foreign('renter_id')->references('id')->on('renters')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};