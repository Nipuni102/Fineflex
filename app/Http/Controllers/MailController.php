<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomMail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $details = [
            'title' => $request->title,
            'body' => $request->body,
        ];

        Mail::to($request->email)->send(new CustomMail($details));

        return response()->json(['message' => 'Email sent successfully']);
    }
}

