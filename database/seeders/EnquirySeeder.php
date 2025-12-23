<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Enquiry;

class EnquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enquiry::create([
            'enquiry_id' => 'ENQ-001',
            'product_id' => 'Prod-001',
            'user_name' => 'John Doe',
            'user_email' => 'john@example.com',
            'user_phone' => '+1234567890',
            'message' => 'Interested in this product...',
            'status' => 'pending',
        ]);

        Enquiry::create([
            'enquiry_id' => 'ENQ-002',
            'product_id' => 'Prod-002',
            'user_name' => 'Jane Smith',
            'user_email' => 'jane@example.com',
            'user_phone' => '+1234567891',
            'message' => 'Can you provide more details?',
            'status' => 'responded',
        ]);

        Enquiry::create([
            'enquiry_id' => 'ENQ-003',
            'product_id' => 'Prod-003',
            'user_name' => 'Bob Johnson',
            'user_email' => 'bob@example.com',
            'user_phone' => '+1234567892',
            'message' => 'Is this available in stock?',
            'status' => 'closed',
        ]);

        Enquiry::create([
            'enquiry_id' => 'ENQ-004',
            'product_id' => 'Prod-004',
            'user_name' => 'Alice Brown',
            'user_email' => 'alice@example.com',
            'user_phone' => '+1234567893',
            'message' => 'Looking for bulk pricing.',
            'status' => 'pending',
        ]);

        Enquiry::create([
            'enquiry_id' => 'ENQ-005',
            'product_id' => 'Prod-005',
            'user_name' => 'Charlie Wilson',
            'user_email' => 'charlie@example.com',
            'user_phone' => '+1234567894',
            'message' => 'Need specifications.',
            'status' => 'responded',
        ]);
    }
}
