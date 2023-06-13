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
        Schema::create('init_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idpar');
            $table->unsignedBigInteger('idpro');
            $table->unsignedBigInteger('idparents');
            $table->unsignedBigInteger('idslave');
            $table->string('name');
            $table->text('description');
            $table->boolean('active');
            $table->string('picture');
            $table->unsignedBigInteger('update_user_id');
            $table->unsignedBigInteger('created_user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('init_properties');
    }
};
