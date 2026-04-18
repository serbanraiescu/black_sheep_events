<header class="bg-slate-950/80 backdrop-blur-xl fixed top-0 w-full z-50">
    <nav class="flex justify-between items-center px-8 py-4 max-w-7xl mx-auto">
        <div class="text-2xl font-bold text-primary tracking-tighter font-heading">The Nocturnal Alchemist</div>
        <div class="hidden md:flex items-center space-x-8">
            <a class="text-primary border-b-2 border-primary pb-1 font-heading tracking-tight" href="{{ route('home') }}">Services</a>
            <a class="text-slate-300 font-medium font-heading tracking-tight hover:text-primary transition-colors duration-300" href="{{ route('packages') }}">Packages</a>
            <a class="text-slate-300 font-medium font-heading tracking-tight hover:text-primary transition-colors duration-300" href="{{ route('gallery') }}">Gallery</a>
            <a class="text-slate-300 font-medium font-heading tracking-tight hover:text-primary transition-colors duration-300" href="{{ route('booking.index') }}">Booking</a>
        </div>
        <button class="gold-gradient text-on-primary-fixed px-6 py-2.5 rounded-xl font-bold hover:scale-95 duration-200 ease-in-out transition-all">
            Request Offer
        </button>
    </nav>
</header>
