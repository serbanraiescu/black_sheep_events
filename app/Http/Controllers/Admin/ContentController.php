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
        // 1. Handle Text Sections
        $sections = $request->input('sections', []);
        foreach ($sections as $id => $content) {
            $section = \App\Models\ContentSection::findOrFail($id);
            $section->update(['content' => $content]);
        }

        // 2. Handle Image Uploads
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $id => $file) {
                if ($file->isValid()) {
                    $section = \App\Models\ContentSection::findOrFail($id);
                    
                    // Simple path: storage/app/public/content/filename
                    $path = $file->store('content', 'public');
                    
                    // The path is relative to 'storage', so we store 'storage/path' or just 'content/filename'
                    // Standard Laravel behavior: store('content', 'public') returns 'content/filename.ext'
                    // To access it via public URL, we need 'storage/content/filename.ext'
                    $section->update(['image_path' => 'storage/' . $path]);
                }
            }
        }

        return redirect()->back()->with('success', 'The site essence and imagery have been successfully transmuted.');
    }
}
