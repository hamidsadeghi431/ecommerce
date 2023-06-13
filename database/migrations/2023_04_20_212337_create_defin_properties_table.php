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
        Schema::create('defin_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idpro');
            $table->unsignedBigInteger('idpar');
            $table->string('properties_name');
            $table->text('description');
            $table->boolean('active');
            $table->boolean('input_type');
            $table->foreign('idpar')->references('id')->on('define_parameters');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('defin_properties');
    }
};
