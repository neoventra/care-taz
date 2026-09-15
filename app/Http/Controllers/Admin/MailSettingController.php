<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MailSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class MailSettingController extends Controller
{
    public function edit(): View
    {
        $settings = MailSetting::current() ?? new MailSetting([
            'host' => 'smtp.gmail.com',
            'port' => 587,
            'encryption' => 'tls',
            'username' => '',
            'from_address' => '',
            'from_name' => 'Care Taz Healthcare',
        ]);

        return view('admin.mail-settings.edit', compact('settings'));
    }

    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'host' => ['required', 'string', 'max:255'],
            'port' => ['required', 'integer', 'min:1', 'max:65535'],
            'encryption' => ['required', Rule::in(['tls', 'ssl', 'none'])],
            'username' => ['required', 'string', 'max:255'],
            'password' => ['nullable', 'string', 'max:255'],
            'from_address' => ['required', 'email', 'max:255'],
            'from_name' => ['required', 'string', 'max:255'],
        ]);

        $settings = MailSetting::current() ?? new MailSetting;

        if (blank($data['password'])) {
            unset($data['password']);
        }

        $settings->fill($data);
        $settings->save();
        $settings->applyToConfig();

        return redirect()
            ->route('admin.mail-settings.edit')
            ->with('status', 'Mail settings saved.');
    }
}
