<?php

namespace Database\Factories;

use App\Models\ContactEnquiry;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ContactEnquiry>
 */
class ContactEnquiryFactory extends Factory
{
    protected $model = ContactEnquiry::class;

    public function definition(): array
    {
        $subjects = [
            'Self Assessment filing',
            'Payroll quote',
            'Company formation',
            'VAT registration',
            'Making Tax Digital setup',
            'Bookkeeping support',
            'Switching accountants',
            'Corporation tax query',
            'Budgeting review',
            'Free consultation',
        ];

        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->numerify('07### ######'),
            'subject' => fake()->randomElement($subjects),
            'message' => fake()->paragraphs(2, true),
            'created_at' => fake()->dateTimeBetween('-6 months', 'now'),
            'updated_at' => now(),
        ];
    }
}
