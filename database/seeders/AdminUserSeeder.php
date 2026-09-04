<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['username' => 'admin'],
            [
                'name' => 'Caretaz Admin',
                'email' => 'admin@caretazhealthcare.co.uk',
                'password' => 'Caretaz@2026',
                'email_verified_at' => now(),
            ]
        );
    }
}
