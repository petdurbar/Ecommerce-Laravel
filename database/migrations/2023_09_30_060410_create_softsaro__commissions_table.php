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
        Schema::create('softsaro__commissions', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->nullable();
            $table->integer("order_id")->nullable();
            $table->string("affilate_commission")->nullable();
            $table->string("incentive_commission")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('softsaro__commissions');
    }
};
