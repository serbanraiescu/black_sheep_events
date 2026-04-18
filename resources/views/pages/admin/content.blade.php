@extends('layouts.admin')

@section('title', 'Content Editor')

@section('content')
<!-- Page Header -->
<div class="mb-12">
    <h1 class="text-5xl serif-font font-bold text-on-surface mb-2 tracking-tight">Content <span class="text-primary italic">Alchemist</span></h1>
    <p class="text-slate-400 text-lg max-w-2xl leading-relaxed">Refine the digital presence. Transform data into storytelling.</p>
</div>

<div class="grid grid-cols-12 gap-8">
    <!-- Left Column: Section Selector -->
    <div class="col-span-12 lg:col-span-4 space-y-4">
        <div class="bg-surface-container-low rounded-2xl p-6 border border-white/5 shadow-xl">
             <h3 class="text-xs uppercase tracking-widest text-slate-500 font-label mb-6">Select Section</h3>
             <div class="space-y-2">
                 <button class="w-full text-left p-4 rounded-xl gold-gradient text-on-primary-fixed font-bold flex items-center justify-between">
                     <span>Global Homepage</span>
                     <span class="material-symbols-outlined text-sm">edit</span>
                 </button>
             </div>
        </div>
    </div>

    <!-- Right Column: Editor Form -->
    <div class="col-span-12 lg:col-span-8">
        <div class="bg-surface-container-low rounded-2xl p-8 border border-white/5 shadow-xl">
            @if(session('success'))
                <div class="mb-6 p-4 rounded-xl bg-primary/10 border border-primary/20 text-primary flex items-center gap-3">
                    <span class="material-symbols-outlined">auto_fix_high</span>
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.content.update') }}" method="POST" enctype="multipart/form-data" class="space-y-12">
                @csrf
                <div class="space-y-10">
                    @foreach($sections as $section)
                        <div class="p-6 rounded-2xl bg-surface-container-lowest/50 border border-white/5 space-y-6">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="w-2 h-2 rounded-full bg-primary/40"></span>
                                <label class="text-xs font-bold text-slate-500 font-label uppercase tracking-widest">
                                    {{ str_replace('_', ' ', $section->section_key) }}
                                </label>
                            </div>
                            
                            <!-- Text Editor -->
                            @if(strlen($section->content) > 100 || str_contains($section->section_key, 'description'))
                                <textarea name="sections[{{ $section->id }}]" rows="4" class="w-full bg-surface-container-lowest border border-white/10 rounded-xl px-6 py-4 focus:ring-1 focus:ring-primary outline-none transition-all leading-relaxed text-slate-300">{{ $section->content }}</textarea>
                            @else
                                <input name="sections[{{ $section->id }}]" type="text" class="w-full bg-surface-container-lowest border border-white/10 rounded-xl px-6 py-4 focus:ring-1 focus:ring-primary outline-none transition-all text-lg text-slate-300 font-medium" value="{{ $section->content }}">
                            @endif

                            <!-- Image Editor (Optional) -->
                            @if(str_contains($section->section_key, 'background') || str_contains($section->section_key, 'image'))
                                <div class="mt-4 flex flex-col md:flex-row gap-6 items-start">
                                    <div class="w-full md:w-32 h-32 rounded-xl overflow-hidden bg-black/40 border border-white/10 flex-shrink-0">
                                        @if($section->image_path)
                                            <img src="{{ str_starts_with($section->image_path, 'http') ? $section->image_path : asset($section->image_path) }}" class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full flex flex-col items-center justify-center text-slate-700">
                                                <span class="material-symbols-outlined text-4xl">image</span>
                                                <span class="text-[10px] font-bold">NO IMAGE</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="flex-grow space-y-3">
                                        <p class="text-xs text-slate-500 italic">Replace this image for the curated after-hours experience.</p>
                                        <input type="file" name="images[{{ $section->id }}]" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-bold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 transition-all cursor-pointer">
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-end gap-4 pt-10 border-t border-white/5">
                    <button type="submit" class="px-12 py-5 rounded-2xl gold-gradient text-on-primary-fixed font-bold shadow-xl shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all uppercase tracking-widest text-sm">
                        Transmute Content & Imagery
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
