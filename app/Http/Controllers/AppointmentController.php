<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
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
            'phone' => ['required', 'string', 'max:50'],
            'service' => ['required', 'string', Rule::in(self::SERVICES)],
            'message' => ['required', 'string', 'max:800'],
            'captcha' => ['required', 'captcha'],
        ], [
            'service.required' => 'Please select the care you are exploring.',
            'service.in' => 'Please select a valid care option.',
            'message.required' => 'Please tell us a little about the situation.',
            'captcha.required' => 'Please complete the security check.',
            'captcha.captcha' => 'The security check was incorrect. Please try again.',
        ]);

        unset($data['captcha']);

        Appointment::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Thank you — we have received your assessment request and will be in touch shortly.',
        ]);
    }
}
