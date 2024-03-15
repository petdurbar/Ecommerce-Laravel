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
        Schema::create('second_banners', function (Blueprint $table) {
            $table->id();
            $table->string("banner_name")->nullable();
            $table->string("slug")->nullable();
            $table->string("banner_image")->nullable();
            $table->string("banner_link")->nullable();
            $table->integer("mobileview")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('second_banners');
    }
};
