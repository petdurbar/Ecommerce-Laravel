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
            $table->longText("product_name")->nullable();
            $table->longText("category_id")->nullable();

            $table->string("slug")->nullable();
            $table->string("featured_image")->nullable();
            $table->integer("featured")->nullable();
            $table->integer("product_order")->nullable();
            $table->integer("product_price")->nullable();
            $table->integer("discount_amount")->nullable();
            $table->string("discount_type")->nullable();
            $table->string("availablestock")->nullable();

            $table->string("returnpolicy")->nullable();
            $table->longText("aboutproduct")->nullable();

            $table->longText("description")->nullable();
            $table->longText("specification")->nullable();

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
