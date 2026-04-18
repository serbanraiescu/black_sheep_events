<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('pages.public.booking');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'nullable|string|max:20',
            'event_date' => 'required|date',
            'event_type_id' => 'required|exists:event_types,id',
            'guest_count' => 'nullable|integer',
            'message' => 'nullable|string',
        ]);

        $booking = \App\Models\Booking::create($validated);

        // Send Email to Admin
        $admin = \App\Models\User::where('is_admin', true)->first();
        if ($admin) {
            \Illuminate\Support\Facades\Mail::to($admin->email)
                ->send(new \App\Mail\NewLeadNotification($booking));
        }

        return back()->with('success', 'Your vision has been received. The Alchemist will reach out shortly.');
    }
}
