<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // ✅ Validate input
        $validated = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'message' => 'required|max:1000',
        ]);

        // ✅ You can log it or save to DB here
        // Log::info($validated);

        // ✅ Redirect back with success message
        return back()->with('success', 'Thank you! Your message has been received.');
    }
}
