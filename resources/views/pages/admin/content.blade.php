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
                 <button class="w-full text-left p-4 rounded-xl bg-surface-container hover:bg-surface-container-high transition-colors text-slate-300 font-medium flex items-center justify-between">
                     <span>Galleries</span>
                     <span class="material-symbols-outlined text-sm">chevron_right</span>
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

            <form action="{{ route('admin.content.update') }}" method="POST" class="space-y-8">
                @csrf
                <div class="space-y-8">
                    @foreach($sections as $section)
                        <div class="space-y-3">
                            <label class="block text-xs font-semibold text-slate-500 font-label uppercase tracking-widest">
                                {{ str_replace('_', ' ', $section->section_key) }}
                            </label>
                            
                            @if(strlen($section->content) > 100 || str_contains($section->section_key, 'description'))
                                <textarea name="sections[{{ $section->id }}]" rows="4" class="w-full bg-surface-container-lowest border border-white/10 rounded-xl px-6 py-4 focus:ring-1 focus:ring-primary outline-none transition-all leading-relaxed text-slate-200 shadow-inner">{{ $section->content }}</textarea>
                            @else
                                <input name="sections[{{ $section->id }}]" type="text" class="w-full bg-surface-container-lowest border border-white/10 rounded-xl px-6 py-4 focus:ring-1 focus:ring-primary outline-none transition-all text-lg text-slate-200 shadow-inner" value="{{ $section->content }}">
                            @endif
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-end gap-4 pt-8 border-t border-white/5">
                    <button type="submit" class="px-12 py-5 rounded-2xl gold-gradient text-on-primary-fixed font-bold shadow-xl shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all">
                        Transmute Content
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
