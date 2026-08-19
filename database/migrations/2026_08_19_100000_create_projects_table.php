<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('meta_desc')->nullable();
            $table->string('type')->nullable();
            $table->string('size')->nullable();
            $table->string('location')->nullable();
            $table->text('card_desc')->nullable();
            $table->string('card_image')->nullable();
            $table->string('hero_title')->nullable();
            $table->text('hero_desc')->nullable();
            $table->json('sections')->nullable();
            $table->json('merken')->nullable();
            $table->json('highlights')->nullable();
            $table->boolean('is_published')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
