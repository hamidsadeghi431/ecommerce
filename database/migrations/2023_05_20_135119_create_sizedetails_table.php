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
        Schema::create('sizedetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sizeId');
            $table->string('title');
            $table->string('description');
            $table->unsignedBigInteger('userInsert');
            $table->unsignedBigInteger('userUpdate');
            $table->boolean('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sizedetails');
    }
};
