<?php

namespace App\Http\Controllers;

use App\Models\ContactEnquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:800'],
            'captcha' => ['required', 'captcha'],
        ], [
            'captcha.required' => 'Please complete the security check.',
            'captcha.captcha' => 'The security check was incorrect. Please try again.',
        ]);

        unset($data['captcha']);

        ContactEnquiry::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Thank you — a member of the team will be in touch shortly.',
        ]);
    }
}
