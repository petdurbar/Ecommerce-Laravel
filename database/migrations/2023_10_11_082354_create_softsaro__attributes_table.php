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
        Schema::create('softsaro__attributes', function (Blueprint $table) {
            $table->id();
            $table->string("attribute_name")->nullable();
            $table->string("slug")->nullable();
            $table->integer("sort_order")->nullable();
            $table->integer("attribute_group_id")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('softsaro__attributes');
    }
};
