<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'product_name' => 'MB ruler GONIOMETER',
            'tags' => 'Manish',
            'category' => 'Life Science',
            'product_thumbnail' => 'products/thumbnails/uQXRzhBuW00UDx1NmQvNQsGG6WzIgGpKPMqS6U2g.png',
            'image_gallery' => '["products\\/gallery\\/EGvRRhv5Q65pYCRwc1aQaagzUqV8YTZs82g4xwzY.png"]',
            'product_video' => null,
            'sort_description' => 'This transparent plastic goniometer permits observation of a joint\'s axis of motion and its range of motion.',
            'status' => 'active',
        ]);

        Product::create([
            'product_name' => 'DIAMOND TIP FILES FA SERIESsdfg',
            'tags' => 'Engineering',
            'category' => 'Life Science',
            'product_thumbnail' => 'products/thumbnails/KRWTkCodmBxy4iQLZuS6LF8oXkEPhbtY7s0zI38r.png',
            'image_gallery' => '[]',
            'product_video' => null,
            'sort_description' => 'Mandibular length, mandibular angle, and maximum ramus height measurements used during forensic evaluation of skeletal remains require use of a mandibulometer..',
            'status' => 'active',
        ]);

        Product::create([
            'product_name' => 'CanDo Pedal Exerciser',
            'tags' => 'Engineering',
            'category' => 'Engineering',
            'product_thumbnail' => 'products/thumbnails/tea7Y7WGPIixCCJRbzud2ljSTjPmpiTjjDMiuKNa.png',
            'image_gallery' => '[]',
            'product_video' => null,
            'sort_description' => 'The CanDo fold-up digital pedal exerciser ships pre-assembled - just add tension knob! This model folds for easy storage, transportation and shipping.',
            'status' => 'active',
        ]);

        Product::create([
            'product_name' => 'MINI CERMAIC FIBER STONES',
            'tags' => null,
            'category' => 'Engineering',
            'product_thumbnail' => 'products/thumbnails/TgUQ9Z69W7Zl9n9xKL0urfjJyOV3MeJCyhmiBTtQ.png',
            'image_gallery' => '[]',
            'product_video' => null,
            'sort_description' => 'xfhgdfyh dghyd',
            'status' => 'inactive',
        ]);
    }
}
