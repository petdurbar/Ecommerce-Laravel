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
        Schema::table('product_non_variations', function (Blueprint $table) {
            //
            $table->integer("pvp_id")->nullable();
            $table->integer("attribute_id")->nullable();
            $table->integer("attribute_value_id")->nullable();
            $table->integer("product_id")->nullable();
            $table->string("image")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_non_variations', function (Blueprint $table) {
            //
        });
    }
};
