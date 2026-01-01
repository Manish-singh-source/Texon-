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
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('banner_active')->default(false)->after('status');
            $table->boolean('about_product_active')->default(false)->after('banner_active');
            $table->boolean('key_points_active')->default(false)->after('about_product_active');
            $table->boolean('gallery_active')->default(false)->after('key_points_active');
            $table->boolean('banner_video_active')->default(false)->after('gallery_active');
            $table->boolean('features_active')->default(false)->after('banner_video_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'banner_active',
                'about_product_active',
                'key_points_active',
                'gallery_active',
                'banner_video_active',
                'features_active'
            ]);
        });
    }
};
