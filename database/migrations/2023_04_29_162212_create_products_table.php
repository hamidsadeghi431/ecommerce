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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('BrandId');
            $table->unsignedBigInteger('colorId');
            $table->mediumText('shortDescription');
            $table->longText('longDescription');
            $table->integer('originalPrice');
            $table->integer('sellingPrice');
            $table->integer('quantity');
            $table->tinyInteger('trending')->default('0')->comment('1=trending 0=not trending');
            $table->tinyInteger('status')->default('1')->comment('1=visible 0=hidden');
            $table->string('metaTitle')->nullable();
            $table->mediumText('metaKeyword')->nullable();
            $table->mediumText('metaDescription')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
