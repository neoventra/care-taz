<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class MailSetting extends Model
{
    protected $fillable = [
        'host',
        'port',
        'encryption',
        'username',
        'password',
        'from_address',
        'from_name',
    ];

    protected function casts(): array
    {
        return [
            'port' => 'integer',
            'password' => 'encrypted',
        ];
    }

    public static function current(): ?self
    {
        if (! Schema::hasTable('mail_settings')) {
            return null;
        }

        return static::query()->latest('id')->first();
    }

    public function applyToConfig(): void
    {
        $encryption = strtolower((string) $this->encryption);
        if ($encryption === '' || $encryption === 'null' || $encryption === 'none') {
            $encryption = null;
        }

        $password = preg_replace('/\s+/', '', (string) $this->password);

        Config::set('mail.default', 'smtp');
        Config::set('mail.mailers.smtp.transport', 'smtp');
        Config::set('mail.mailers.smtp.host', $this->host);
        Config::set('mail.mailers.smtp.port', $this->port);
        Config::set('mail.mailers.smtp.encryption', $encryption);
        Config::set('mail.mailers.smtp.username', $this->username);
        Config::set('mail.mailers.smtp.password', $password);
        Config::set('mail.mailers.smtp.timeout', null);
        Config::set('mail.from.address', $this->from_address);
        Config::set('mail.from.name', $this->from_name);
    }
}
