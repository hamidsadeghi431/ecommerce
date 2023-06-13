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
        Schema::create('products_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brandId');
            $table->unsignedBigInteger('catId');
            $table->unsignedBigInteger('sCatId');
            $table->unsignedBigInteger('userInsert');
            $table->unsignedBigInteger('userUpdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_categories');
    }
};
