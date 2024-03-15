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
        Schema::create('product_price_variations', function (Blueprint $table) {
           $table->id();
            $table->integer("product_id")->nullable();
            $table->integer("quantity")->nullable();
            $table->string("sku")->nullable();
            $table->integer("available")->nullable();
            $table->double("price")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_price_variations');
    }
};
