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
        Schema::table('product_banners', function (Blueprint $table) {
            $table->dropColumn('subheading');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_banners', function (Blueprint $table) {
            $table->string('subheading')->nullable()->after('heading');
        });
    }
};
