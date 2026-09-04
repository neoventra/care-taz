<?php

namespace Database\Seeders;

use App\Models\ContactEnquiry;
use Illuminate\Database\Seeder;

class ContactEnquirySeeder extends Seeder
{
    public function run(): void
    {
        ContactEnquiry::factory()->count(30)->create();
    }
}
