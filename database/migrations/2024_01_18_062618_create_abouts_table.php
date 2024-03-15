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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->nullable();
            $table->string('page_name')->nullable();
            $table->string('aboutherosection_image')->nullable();
            $table->text('aboutherosection_description')->nullable();
            $table->text('aboutsecondsection_description')->nullable();
            $table->string('aboutsecondsection_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
