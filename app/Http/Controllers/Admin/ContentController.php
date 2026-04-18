<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $sections = \App\Models\ContentSection::all();
        return view('pages.admin.content', compact('sections'));
    }

    public function update(Request $request)
    {
        $data = $request->input('sections', []);

        foreach ($data as $id => $content) {
            $section = \App\Models\ContentSection::findOrFail($id);
            $section->update(['content' => $content]);
        }

        return redirect()->back()->with('success', 'The site content has been successfully transmuted.');
    }
}
