<?php

namespace Database\Seeders;

use App\Models\MailSetting;
use Illuminate\Database\Seeder;

class MailSettingSeeder extends Seeder
{
    public function run(): void
    {
        $existing = MailSetting::query()->latest('id')->first();

        $payload = [
            'host' => 'smtp.gmail.com',
            'port' => 587,
            'encryption' => 'tls',
            'username' => 'caretazhealth@gmail.com',
            'from_address' => 'caretazhealth@gmail.com',
            'from_name' => 'Care Taz Healthcare',
        ];

        if ($existing) {
            $existing->fill($payload);
            if (blank($existing->password)) {
                $existing->password = 'rjkp eraa geer rxla';
            }
            $existing->save();

            return;
        }

        MailSetting::create([
            ...$payload,
            'password' => 'rjkp eraa geer rxla',
        ]);
    }
}
