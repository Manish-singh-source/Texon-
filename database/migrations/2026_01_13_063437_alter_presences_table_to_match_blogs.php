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
        Schema::table('presences', function (Blueprint $table) {
            $table->dropColumn(['name', 'image', 'status']);
            $table->string('title');
            $table->string('author');
            $table->string('tags')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->date('published_date')->nullable();
            $table->text('content');
            $table->string('featured_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('presences', function (Blueprint $table) {
            $table->dropColumn(['title', 'author', 'tags', 'status', 'published_date', 'content', 'featured_image']);
            $table->string('name');
            $table->string('image')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
        });
    }
};
