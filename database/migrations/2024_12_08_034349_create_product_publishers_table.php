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
        Schema::create('product_publishers', function (Blueprint $table) {
            $table->id();
            $table->string('publisher_name'); // Lưu thông tin như m, vg, ex, vg+, G
            $table->string('slug')->unique(); // NOT NULL AND UNIQUE
            $table->string('desc')->nullable(); // Thêm cột mô tả nếu cần
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_publishers');
    }
};
