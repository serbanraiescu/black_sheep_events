<footer class="bg-slate-950 w-full py-12">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 px-8 max-w-7xl mx-auto font-body leading-relaxed">
        <div class="col-span-1 md:col-span-1">
            <div class="text-xl font-bold text-primary mb-4">The Nocturnal Alchemist</div>
            <p class="text-slate-400 text-sm mb-6">Crafted for the curated after-hours. Bringing elite mixology to the most exclusive celebrations across the globe.</p>
            <div class="flex gap-4">
                <a class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary hover:text-amber-200 transition-all opacity-80 hover:opacity-100" href="#">
                    <span class="material-symbols-outlined text-lg">public</span>
                </a>
                <a class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary hover:text-amber-200 transition-all opacity-80 hover:opacity-100" href="#">
                    <span class="material-symbols-outlined text-lg">alternate_email</span>
                </a>
            </div>
        </div>
        <div>
            <h4 class="text-primary font-bold mb-6">Quick Links</h4>
            <ul class="space-y-4 text-sm text-slate-400">
                <li><a class="hover:text-amber-200 transition-all" href="#">About Us</a></li>
                <li><a class="hover:text-amber-200 transition-all" href="{{ route('services') }}">Services</a></li>
                <li><a class="hover:text-amber-200 transition-all" href="{{ route('packages') }}">Packages</a></li>
                <li><a class="hover:text-amber-200 transition-all" href="{{ route('gallery') }}">Gallery</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-primary font-bold mb-6">Social</h4>
            <ul class="space-y-4 text-sm text-slate-400">
                <li><a class="hover:text-amber-200 transition-all" href="#">Instagram</a></li>
                <li><a class="hover:text-amber-200 transition-all" href="#">LinkedIn</a></li>
                <li><a class="hover:text-amber-200 transition-all" href="#">Pinterest</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-primary font-bold mb-6">Legal</h4>
            <ul class="space-y-4 text-sm text-slate-400">
                <li><a class="hover:text-amber-200 transition-all" href="#">Privacy Policy</a></li>
                <li><a class="hover:text-amber-200 transition-all" href="#">Terms of Service</a></li>
                <li><a class="hover:text-amber-200 transition-all" href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-8 mt-12 pt-8 border-t border-outline-variant/10 text-center text-slate-400 text-xs">
        © {{ date('Y') }} The Nocturnal Alchemist. Crafted for the curated after-hours.
    </div>
</footer>
