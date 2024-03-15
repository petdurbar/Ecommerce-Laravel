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
        Schema::create('softsaro__users', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("slug")->nullable();
            $table->string("email")->nullable();
            $table->string("phonenumber")->nullable();
            $table->string("address")->nullable();
            $table->string("password")->nullable();

            $table->integer("is_affilate")->nullable();
            $table->float("earning")->nullable();
            $table->string("affilate_id")->nullable();
            $table->string("status")->nullable();
            $table->string("promotional_method")->nullable();
            $table->string("expected_sale")->nullable();
            $table->string("khalti_id")->nullable();
            $table->string("ime_id")->nullable();
            $table->string("esewa_id")->nullable();
            $table->string("bank_name")->nullable();
            $table->string("bank_branch")->nullable();
            $table->string("account_holder_name")->nullable();
            $table->string("account_number")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('softsaro__users');
    }
};
