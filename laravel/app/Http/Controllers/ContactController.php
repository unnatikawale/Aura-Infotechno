<?php

namespace App\Http\Controllers;

use App\Mail\ContactInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Handle the contact form submission.
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:25',
            'service' => 'nullable|string|max:50',
            'message' => 'required|string|max:5000',
        ]);

        try {
            // Send the email to the user's configured SMTP inbox
            $recipient = config('mail.username') ?: 'unnatikawale43@gmail.com';
            Mail::to($recipient)->send(new ContactInquiry($validated));

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you! Your message has been sent successfully. We will get back to you shortly.'
                ]);
            }

            return back()->with('success', 'Thank you! Your message has been sent successfully. We will get back to you shortly.');
        } catch (\Exception $e) {
            // Log the error for troubleshooting
            Log::error('Mail sending failed: ' . $e->getMessage());

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sorry, we encountered an error while sending your message. Please try again later.'
                ], 500);
            }

            return back()->with('error', 'Sorry, we encountered an error while sending your message. Please try again later.')->withInput();
        }
    }
}
