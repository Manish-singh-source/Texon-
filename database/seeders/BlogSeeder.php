<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => 'Introduction to Laravel',
            'author' => 'John Doe',
            'category' => 'Technology',
            'tags' => 'Laravel, PHP, Framework',
            'status' => 'published',
            'published_date' => '2023-01-01',
            'content' => 'Laravel is a powerful PHP framework for web development.',
            'featured_image' => 'blogs\yqYC6yKWwplVMl2q4FcXXDAn2Mr2XISrvL590KpX.jpg',
        ]);

        Blog::create([
            'title' => 'Understanding MVC Architecture',
            'author' => 'Jane Smith',
            'category' => 'Programming',
            'tags' => 'MVC, Design Patterns',
            'status' => 'published',
            'published_date' => '2023-02-01',
            'content' => 'MVC stands for Model-View-Controller and is a common architecture pattern.',
            'featured_image' => 'blogs\1766647982_post-2.jpg',
        ]);

        Blog::create([  
            'title' => 'Best Practices in Web Development',
            'author' => 'Alice Johnson',
            'category' => 'Web Development',
            'tags' => 'Best Practices, Coding',
            'status' => 'draft',
            'published_date' => null,
            'content' => 'Following best practices ensures maintainable and scalable code.',
            'featured_image' => 'blogs\1766648015_post-3.jpg',
        ]);
    }
}