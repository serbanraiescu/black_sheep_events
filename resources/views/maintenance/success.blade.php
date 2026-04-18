@extends('layouts.public')

@section('title', 'Installation Successful')

@section('content')
<div class="min-h-[60vh] flex flex-col items-center justify-center text-center px-6 py-20">
    <div class="glass-card p-12 max-w-3xl border-primary/20 bg-surface-container-low rounded-3xl shadow-2xl">
        <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-8">
            <span class="material-symbols-outlined text-primary text-5xl">auto_fix_high</span>
        </div>
        
        <h1 class="text-5xl serif-font font-bold text-on-surface mb-4 tracking-tight">
            Sanctum <span class="text-primary italic">Stabilized</span>
        </h1>
        
        <p class="text-slate-400 text-lg mb-10 italic max-w-xl mx-auto leading-relaxed">
            The architectural foundations have been successfully integrated. All core datasets have been seeded into the vessel.
        </p>
        
        <div class="bg-black/60 rounded-2xl p-8 text-left font-mono text-[10px] text-primary-fixed-dim/80 mb-10 overflow-auto max-h-64 border border-white/5 shadow-inner">
            <div class="uppercase tracking-widest text-[9px] text-slate-500 mb-4 border-b border-white/5 pb-2">System Output Ledger</div>
            <pre class="whitespace-pre-wrap">{{ $raw_output }}</pre>
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
            <a href="{{ route('admin.login') }}" class="w-full sm:w-auto gold-gradient px-10 py-5 rounded-2xl text-on-primary-fixed font-semibold tracking-widest uppercase hover:scale-[1.02] active:scale-95 transition-all shadow-xl shadow-primary/20">
                Access Admin Portal
            </a>
            <a href="{{ route('home') }}" class="w-full sm:w-auto px-10 py-5 rounded-2xl border border-white/10 text-slate-300 font-semibold tracking-widest uppercase hover:bg-white/5 transition-all">
                Return to Surface
            </a>
        </div>
    </div>
</div>
@endsection
