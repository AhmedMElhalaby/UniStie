<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('details')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
