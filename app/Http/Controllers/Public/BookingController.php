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
        // Placeholder for booking submission
        return back()->with('success', 'Booking submitted!');
    }
}
