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
        Schema::create('founders_data', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('cofounders');
            $table->string('problem');
            $table->string('solution');
            $table->string('funds');
            $table->string('youtube');
            $table->string('business_plan');
            $table->string('business_model');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('founders_data');
    }
};
