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
        Schema::table('landing_pages', function (Blueprint $table) {
            $table->dropColumn([
                's1_label', 's1_title', 's1_text1', 's1_text2', 's1_image', 's1_cta_text', 's1_cta_url',
                's2_label', 's2_title', 's2_text1', 's2_text2', 's2_image',
                's3_label', 's3_title', 's3_text1', 's3_text2', 's3_image', 's3_cta_text', 's3_cta_url',
            ]);
            $table->json('sections')->nullable()->after('hero_cta2_url');
        });
    }

    public function down(): void
    {
        Schema::table('landing_pages', function (Blueprint $table) {
            $table->dropColumn('sections');

            $table->string('s1_label')->nullable();
            $table->string('s1_title')->nullable();
            $table->text('s1_text1')->nullable();
            $table->text('s1_text2')->nullable();
            $table->string('s1_image')->nullable();
            $table->string('s1_cta_text')->nullable();
            $table->string('s1_cta_url')->nullable();
            $table->string('s2_label')->nullable();
            $table->string('s2_title')->nullable();
            $table->text('s2_text1')->nullable();
            $table->text('s2_text2')->nullable();
            $table->string('s2_image')->nullable();
            $table->string('s3_label')->nullable();
            $table->string('s3_title')->nullable();
            $table->text('s3_text1')->nullable();
            $table->text('s3_text2')->nullable();
            $table->string('s3_image')->nullable();
            $table->string('s3_cta_text')->nullable();
            $table->string('s3_cta_url')->nullable();
        });
    }
};
