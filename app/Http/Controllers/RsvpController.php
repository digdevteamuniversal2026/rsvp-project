<?php

namespace App\Http\Controllers;
use App\Models\Rsvp; // Import the Rsvp model

use Illuminate\Http\Request;

class RsvpController extends Controller
{
      // 1️⃣ Show the RSVP form
    public function create()
    {
        return view('rsvp'); // This will show resources/views/rsvp.blade.php
    }

    // 2️⃣ Handle form submission
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'response' => 'required|in:yes,no',
        ]);

        // Save to the database
        Rsvp::create($request->all());

        // Redirect back with success message
        return redirect()->back()->with('success', 'RSVP submitted successfully!');
    }
}
