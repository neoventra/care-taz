<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentRequestMail;
use App\Models\Appointment;
use App\Models\MailSetting;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class AppointmentController extends Controller
{
    public const SERVICES = [
        'Hourly / visiting care',
        'Overnight care',
        '24-hour / live-in care',
        'Urgent or short-notice care',
        'Dementia care',
        'Palliative / end-of-life care',
        "Parkinson's support",
        'Supported living',
        "Not sure yet — I'd like advice",
        'Other',
    ];

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'regex:/^[0-9]+$/', 'max:15'],
            'service' => ['required', 'string', Rule::in(self::SERVICES)],
            'message' => ['required', 'string', 'max:800'],
            'captcha' => ['required', 'captcha'],
        ], [
            'phone.regex' => 'Please enter a valid phone number using digits only.',
            'service.required' => 'Please select the care you are exploring.',
            'service.in' => 'Please select a valid care option.',
            'message.required' => 'Please tell us a little about the situation.',
            'captcha.required' => 'Please complete the security check.',
            'captcha.captcha' => 'The security check was incorrect. Please try again.',
        ]);

        unset($data['captcha']);

        $appointment = Appointment::create($data);

        $this->notifyAdmin($appointment);

        return response()->json([
            'success' => true,
            'message' => 'Thank you — we have received your assessment request and will be in touch shortly.',
        ]);
    }

    private function notifyAdmin(Appointment $appointment): void
    {
        $adminEmail = config('caretaz.admin_email');

        if (! is_string($adminEmail) || ! filter_var($adminEmail, FILTER_VALIDATE_EMAIL)) {
            Log::warning('Appointment saved but ADMIN_EMAIL is missing or invalid.');

            return;
        }

        try {
            MailSetting::current()?->applyToConfig();
            Mail::to($adminEmail)->send(new AppointmentRequestMail($appointment));
        } catch (\Throwable $e) {
            Log::error('Failed to send appointment request email.', [
                'appointment_id' => $appointment->id,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
