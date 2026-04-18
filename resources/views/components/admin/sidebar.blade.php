<aside class="h-screen w-64 fixed left-0 top-0 z-40 bg-surface flex flex-col p-6 shadow-[blur-32px_spread--4px_rgba(212,175,55,0.08)]">
    <div class="mb-10">
        <span class="text-2xl font-bold uppercase tracking-[0.2em] text-[#d4af37]">The Alchemist</span>
        <p class="text-[10px] uppercase tracking-[0.3em] text-slate-500 mt-1 font-label">Management Suite</p>
    </div>
    <nav class="flex-1 space-y-2">
        <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 {{ request()->routeIs('admin.dashboard') ? 'text-primary font-bold border-r-2 border-primary bg-gradient-to-r from-primary/10 to-transparent' : 'text-slate-400 hover:text-slate-100 hover:bg-white/5' }}" href="{{ route('admin.dashboard') }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-label tracking-wide text-sm">Dashboard</span>
        </a>
        <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 {{ request()->routeIs('admin.content') ? 'text-primary font-bold border-r-2 border-primary bg-gradient-to-r from-primary/10 to-transparent' : 'text-slate-400 hover:text-slate-100 hover:bg-white/5' }}" href="{{ route('admin.content') }}">
            <span class="material-symbols-outlined">edit_note</span>
            <span class="font-label tracking-wide text-sm">Content Editor</span>
        </a>
        <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 {{ request()->routeIs('admin.bookings') ? 'text-primary font-bold border-r-2 border-primary bg-gradient-to-r from-primary/10 to-transparent' : 'text-slate-400 hover:text-slate-100 hover:bg-white/5' }}" href="{{ route('admin.bookings') }}">
            <span class="material-symbols-outlined">calendar_month</span>
            <span class="font-label tracking-wide text-sm">Booking Management</span>
        </a>
        <a class="flex items-center gap-3 p-3 rounded-xl transition-all duration-300 {{ request()->routeIs('admin.settings') ? 'text-primary font-bold border-r-2 border-primary bg-gradient-to-r from-primary/10 to-transparent' : 'text-slate-400 hover:text-slate-100 hover:bg-white/5' }}" href="{{ route('admin.settings') }}">
            <span class="material-symbols-outlined">settings</span>
            <span class="font-label tracking-wide text-sm">Settings</span>
        </a>
    </nav>
    <div class="mt-auto pt-6 border-t border-white/5">
        <button class="w-full py-4 rounded-xl gold-gradient text-on-primary-fixed font-bold text-sm tracking-widest uppercase flex items-center justify-center gap-2 shadow-[0_32px_32px_-4px_rgba(212,175,55,0.15)] active:scale-95 transition-transform">
            <span class="material-symbols-outlined text-lg">add</span>
            New Event
        </button>
        
        <form action="{{ route('admin.logout') }}" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="w-full flex items-center gap-3 p-3 rounded-xl text-slate-400 hover:text-red-400 hover:bg-white/5 transition-all duration-300 font-label tracking-wide text-sm">
                <span class="material-symbols-outlined">logout</span>
                Logout
            </button>
        </form>
    </div>
</aside>
