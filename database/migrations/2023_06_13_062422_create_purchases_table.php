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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('billNo');
            $table->unsignedBigInteger('qty');
            $table->unsignedBigInteger('idcsd');
            $table->unsignedBigInteger('userInsert');
            $table->boolean('paystatus');
            $table->boolean('status');
            $table->unsignedBigInteger('userUpdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
