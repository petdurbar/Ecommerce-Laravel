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
        Schema::create('softsaro__order_items', function (Blueprint $table) {
            $table->id();
            $table->string("order_id")->nullable();
            $table->integer("product_id")->nullable();
            $table->integer("quantity")->nullable();
            $table->integer("product_price")->nullable();
            $table->float("incentive_amount")->nullable();
            $table->float("affiliate_amount")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('softsaro__order_items');
    }
};
