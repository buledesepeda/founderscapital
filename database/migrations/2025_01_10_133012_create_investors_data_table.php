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
        Schema::create('investors_data', function (Blueprint $table) {
            $table->id();
            $table->string('profile_pic');
            $table->string('name');
            $table->string('years');
            $table->string('risk');
            $table->string('preferred_industry');
            $table->string('net_worth');
            $table->string('investable_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investors_data');
    }
};
