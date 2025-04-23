<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Log;

class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('support@toptal.ai')->send(new ContactMail(
                $request->name,
                $request->email,
                $request->message
            ));

            return response()->json([
                'status' => 'success',
                'message' => 'Message sent successfully.'
            ]);
        } catch (\Exception $e) {
            Log::error('Mail sending failed: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Message could not be sent. Check logs for details.'
            ]);
        }
    }
}
