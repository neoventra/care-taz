<?php

namespace App\Http\Controllers;

use App\Mail\ContactEnquiryMail;
use App\Models\ContactEnquiry;
use App\Models\MailSetting;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'regex:/^[0-9]+$/', 'max:15'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:800'],
            'captcha' => ['required', 'captcha'],
        ], [
            'phone.regex' => 'Please enter a valid phone number using digits only.',
            'captcha.required' => 'Please complete the security check.',
            'captcha.captcha' => 'The security check was incorrect. Please try again.',
        ]);

        unset($data['captcha']);

        $enquiry = ContactEnquiry::create($data);

        $this->notifyAdmin($enquiry);

        return response()->json([
            'success' => true,
            'message' => 'Thank you — a member of the team will be in touch shortly.',
        ]);
    }

    private function notifyAdmin(ContactEnquiry $enquiry): void
    {
        $adminEmail = config('caretaz.admin_email');

        if (! is_string($adminEmail) || ! filter_var($adminEmail, FILTER_VALIDATE_EMAIL)) {
            Log::warning('Contact enquiry saved but ADMIN_EMAIL is missing or invalid.');

            return;
        }

        try {
            MailSetting::current()?->applyToConfig();
            Mail::to($adminEmail)->send(new ContactEnquiryMail($enquiry));
        } catch (\Throwable $e) {
            Log::error('Failed to send contact enquiry email.', [
                'enquiry_id' => $enquiry->id,
                'error' => $e->getMessage(),
            ]);
        }
    }
}
