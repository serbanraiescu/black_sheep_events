<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Alchemist | Login</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface text-on-surface font-body selection:bg-primary/30 min-h-screen flex items-center justify-center p-6">
    
    <div class="max-w-md w-full">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold uppercase tracking-[0.2em] text-primary serif-font italic">The Alchemist</h1>
            <p class="text-xs uppercase tracking-[0.3em] text-slate-500 mt-2 font-label">Administrative Access</p>
        </div>

        <div class="glass-card rounded-2xl p-10 border border-white/10 shadow-2xl relative overflow-hidden">
            <div class="absolute -right-20 -top-20 w-40 h-40 bg-primary/5 rounded-full blur-3xl"></div>
            
            <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-6 relative z-10">
                @csrf
                
                @if ($errors->any())
                    <div class="p-4 bg-error/10 text-error rounded-xl text-xs border border-error/20">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-slate-500 font-label">Email Signature</label>
                    <input type="email" name="email" required class="w-full bg-surface-container-lowest border border-white/5 rounded-xl px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all placeholder:text-slate-700" placeholder="artisan@blacksheepevents.ro">
                </div>

                <div class="space-y-2">
                    <label class="block text-xs font-bold uppercase tracking-widest text-slate-500 font-label">Secret Cipher</label>
                    <input type="password" name="password" required class="w-full bg-surface-container-lowest border border-white/5 rounded-xl px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all placeholder:text-slate-700" placeholder="••••••••">
                </div>

                <button type="submit" class="w-full gold-gradient text-on-primary-fixed py-4 rounded-xl font-bold uppercase tracking-widest text-sm hover:scale-[0.98] transition-all shadow-lg shadow-primary/20 mt-4">
                    Enter the Sanctum
                </button>
            </form>
        </div>
        
        <p class="text-center mt-8 text-xs text-slate-600 tracking-tighter italic">"Only the curated after-hours shall pass."</p>
    </div>

</body>
</html>
