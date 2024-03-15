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
        Schema::create('softsaro__billing_infos', function (Blueprint $table) {
            $table->id();
            $table->integer("order_id")->nullable();
            $table->string("billing_name")->nullable();
            $table->string("billing_email")->nullable();
            $table->string("billing_address")->nullable();
            $table->string("billing_phonenumber")->nullable();
            $table->string("shipping_name")->nullable();
            $table->string("shipping_email")->nullable();
            $table->string("shipping_address")->nullable();
            $table->string("shipping_phonenumber")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('softsaro__billing_infos');
    }
};
