@extends('layouts.admin')

@section('title', 'Settings')

@section('content')
<!-- Page Header -->
<div class="mb-12">
    <h1 class="text-5xl serif-font font-bold text-on-surface mb-2 tracking-tight">System <span class="text-primary italic">Essence</span></h1>
    <p class="text-slate-400 text-lg max-w-2xl leading-relaxed">Configure the foundational parameters of the experience.</p>
</div>

<div class="max-w-4xl">
    <div class="bg-surface-container-low rounded-2xl p-8 border border-white/5 shadow-xl space-y-12">
        <!-- Site Identity Section -->
        <section>
            <h3 class="text-xs uppercase tracking-widest text-primary font-label font-bold mb-8 border-b border-white/5 pb-2">Identity & Access</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <label class="block text-sm font-semibold text-slate-400 font-label uppercase tracking-widest">Site Name</label>
                    <input type="text" class="w-full bg-surface-container-lowest border border-white/10 rounded-xl px-6 py-4 focus:ring-1 focus:ring-primary outline-none transition-all" value="The Nocturnal Alchemist">
                </div>
                <div class="space-y-4">
                    <label class="block text-sm font-semibold text-slate-400 font-label uppercase tracking-widest">Admin Email</label>
                    <input type="email" class="w-full bg-surface-container-lowest border border-white/10 rounded-xl px-6 py-4 focus:ring-1 focus:ring-primary outline-none transition-all" value="admin@blacksheepevents.ro">
                </div>
            </div>
        </section>

        <!-- Social Connections Section -->
        <section>
            <h3 class="text-xs uppercase tracking-widest text-primary font-label font-bold mb-8 border-b border-white/5 pb-2">Social Connections</h3>
            <div class="space-y-6">
                <div class="flex items-center gap-6">
                    <div class="w-12 h-12 rounded-full bg-slate-800 flex items-center justify-center text-primary-fixed-dim">
                        <span class="material-symbols-outlined">public</span>
                    </div>
                    <div class="flex-1">
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-bold mb-1">WhatsApp Business</label>
                        <input type="text" class="w-full bg-surface-container-lowest border border-white/10 rounded-xl px-4 py-2 focus:ring-1 focus:ring-primary outline-none transition-all text-sm" value="+40 700 000 000">
                    </div>
                </div>
                <div class="flex items-center gap-6">
                    <div class="w-12 h-12 rounded-full bg-slate-800 flex items-center justify-center text-primary-fixed-dim">
                        <span class="material-symbols-outlined">alternate_email</span>
                    </div>
                    <div class="flex-1">
                        <label class="block text-[10px] uppercase tracking-widest text-slate-500 font-bold mb-1">Instagram Handle</label>
                        <input type="text" class="w-full bg-surface-container-lowest border border-white/10 rounded-xl px-4 py-2 focus:ring-1 focus:ring-primary outline-none transition-all text-sm" value="@nocturnal.alchemist">
                    </div>
                </div>
            </div>
        </section>

        <!-- Database Maintenance Section -->
        <section>
            <h3 class="text-xs uppercase tracking-widest text-primary font-label font-bold mb-8 border-b border-white/5 pb-2">Database Maintenance</h3>
            <div class="p-6 rounded-xl bg-surface-container-highest/20 border border-white/5">
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-primary/10 border border-primary/20 text-primary flex items-center gap-3 text-sm">
                        <span class="material-symbols-outlined">verified</span>
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-red-400 flex items-center gap-3 text-sm">
                        <span class="material-symbols-outlined">error</span>
                        {{ session('error') }}
                    </div>
                @endif

                <p class="text-sm text-slate-400 mb-6 italic leading-relaxed">Execute structural updates and seed core datasets. Use with caution during peak nocturnal hours.</p>
                
                <form action="{{ route('admin.maintenance.update') }}" method="POST">
                    @csrf
                    <button type="submit" class="px-6 py-3 rounded-lg border border-primary/30 text-primary font-bold hover:bg-primary/10 transition-all flex items-center gap-2 group">
                        <span class="material-symbols-outlined text-lg group-hover:rotate-180 transition-transform duration-500">sync</span>
                        Run Database Updates
                    </button>
                </form>
            </div>
        </section>

        <div class="flex justify-end pt-8">
            <button type="submit" class="px-10 py-4 rounded-xl gold-gradient text-on-primary-fixed font-bold shadow-lg shadow-primary/20 hover:scale-[0.98] transition-all">Apply Configuration</button>
        </div>
    </div>
</div>
@endsection
