<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact'); // shows contact.blade.php
    }

        public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Save to database
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Message sent successfully!');
     }
}
