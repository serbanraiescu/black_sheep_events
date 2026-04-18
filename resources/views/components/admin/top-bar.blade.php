<header class="flex justify-between items-center w-full px-8 py-4 bg-surface/80 backdrop-blur-lg sticky top-0 z-30 border-b border-white/10">
    <div class="flex items-center gap-4 flex-1">
        <div class="relative w-full max-w-md group">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-500 group-focus-within:text-primary transition-colors">search</span>
            <input class="bg-surface-container-lowest border-none ring-1 ring-white/10 focus:ring-primary/50 rounded-full pl-10 pr-4 py-2 text-sm w-full font-body placeholder:text-slate-600 transition-all text-on-surface" placeholder="Search alchemy records..." type="text"/>
        </div>
    </div>
    <div class="flex items-center gap-6">
        <div class="flex items-center gap-4 text-slate-400">
            <button class="material-symbols-outlined hover:text-primary cursor-pointer transition-colors">notifications</button>
            <button class="material-symbols-outlined hover:text-primary cursor-pointer transition-colors">dark_mode</button>
        </div>
        <div class="h-8 w-[1px] bg-white/10 mx-2"></div>
        <div class="flex items-center gap-3 cursor-pointer group">
            <div class="text-right">
                <p class="text-sm font-bold serif-font italic text-primary">{{ auth()->user()->name ?? 'Chief Mixologist' }}</p>
                <p class="text-[10px] text-slate-500 uppercase tracking-tighter">Admin Console</p>
            </div>
            <img alt="Admin Avatar" class="w-10 h-10 rounded-full border border-primary/30 group-hover:border-primary transition-colors" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsbVyscL-dA6aQGUQZaf1Pol9D9OxoAqNQxc2XTdixd9EHcTwncncMpiTibAkIKklkYzNewT3qz5mvC59cMb5jVSZyFLxd1kmwhObF4GOSdZY29Zo-5Re7RR1MCvzB2bCrf1-O1QeA9nMKmS1HE5JfLC_eywo2vT-1vR74zy31B52bl-k1nhpkas1o7kOnx_x3Ito6MZ4gdmbi-GPbMHVzOSLp9M-Im1aSEpa3MzRFPX3g8crO4ofMTxFUy-z-M5RSf3t2HaWLHW4"/>
        </div>
    </div>
</header>
