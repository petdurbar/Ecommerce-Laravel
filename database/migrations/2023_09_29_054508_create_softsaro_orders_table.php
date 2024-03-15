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
        Schema::create('softsaro_orders', function (Blueprint $table) {
            $table->id();
            $table->string("order_id")->nullable();
            $table->integer("user_id")->nullable();
            $table->integer("items")->nullable();
            $table->string("amount")->nullable();
            $table->string("payment_method")->nullable();
            $table->string("order_status")->nullable();
            $table->float("delivery_charge")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('softsaro_orders');
    }
};
