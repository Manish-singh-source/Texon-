<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            'brands/mEa66DxCuzNuv3rILiU6HOXd8cRvOJJDpi70oQfO.png',
            'brands/sQD6UnzrNwFx4b3lS7JCOriItsHCJZDc2MK6craZ.png'
        ];

        for ($i = 1; $i <= 20; $i++) {
            Brand::create([
                'name' => 'Brand ' . $i,
                'image' => $images[($i - 1) % 2],
                'status' => 'active'
            ]);
        }
    }
}
