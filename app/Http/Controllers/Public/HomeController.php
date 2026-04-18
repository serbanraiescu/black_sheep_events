<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $content = \App\Models\ContentSection::where('page_name', 'home')
            ->get()
            ->pluck('content', 'section_key');

        $eventTypes = \App\Models\EventType::all();

        return view('pages.public.home', compact('content', 'eventTypes'));
    }
}
