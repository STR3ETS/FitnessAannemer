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
        Schema::create('landing_pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->boolean('is_published')->default(false);

            // Hero
            $table->string('hero_label')->nullable();
            $table->string('hero_title');
            $table->text('hero_description');
            $table->string('hero_cta_text');
            $table->string('hero_cta_url');
            $table->string('hero_cta2_text')->nullable();
            $table->string('hero_cta2_url')->nullable();

            // Sectie 1 (wit)
            $table->string('s1_label')->nullable();
            $table->string('s1_title');
            $table->text('s1_text1');
            $table->text('s1_text2')->nullable();
            $table->string('s1_image')->nullable();
            $table->string('s1_cta_text')->nullable();
            $table->string('s1_cta_url')->nullable();

            // Sectie 2 (donker)
            $table->string('s2_label')->nullable();
            $table->string('s2_title');
            $table->text('s2_text1');
            $table->text('s2_text2')->nullable();
            $table->string('s2_image')->nullable();

            // Sectie 3 (wit)
            $table->string('s3_label')->nullable();
            $table->string('s3_title');
            $table->text('s3_text1');
            $table->text('s3_text2')->nullable();
            $table->string('s3_image')->nullable();
            $table->string('s3_cta_text')->nullable();
            $table->string('s3_cta_url')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages');
    }
};
