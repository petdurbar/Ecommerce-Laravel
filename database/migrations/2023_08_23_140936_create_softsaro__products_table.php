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
        Schema::create('softsaro__products', function (Blueprint $table) {
            $table->id();
            $table->string("product_name")->nullable();
            $table->string("slug")->nullable();
            $table->string("featured_image")->nullable();
            $table->integer("featured")->nullable();
            $table->integer("product_order")->nullable();
            $table->integer("product_price")->nullable();
            $table->float("cost_price")->nullable();
            $table->integer("cutoff_price")->nullable();
            $table->integer("category_id")->nullable();
            $table->integer("margin")->nullable();
            $table->integer("mrp_price")->nullable();
            $table->integer("product_stock")->nullable();
            $table->longText("description")->nullable();
            $table->longText("video")->nullable();
            $table->longText("discount_amount")->nullable();

            $table->float("incentive_commission_amount")->nullable();
            $table->float("incentive_commission_percentage")->nullable();
            $table->float("referal_commission_amount")->nullable();
            $table->float("referal_commission_percentage")->nullable();
            $table->float("affiliate_commission_amount")->nullable();
            $table->float("affiliate_commission_percentage")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('softsaro__products');
    }
};
