@extends('layouts.public')

@section('content')
<!-- Hero Section -->
<section class="relative h-[921px] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover opacity-60" src="{{ isset($content['hero_background']) && $content['hero_background']->image_path ? (str_starts_with($content['hero_background']->image_path, 'http') ? $content['hero_background']->image_path : asset($content['hero_background']->image_path)) : 'https://lh3.googleusercontent.com/aida-public/AB6AXuAFTYV1twmn97vM6f1e4v6VaORj6bY8MafQmDjRAc_Jqx3H1yowifYDeIXxo7gTgI6_Ub3bMqPhz6CMiVUFBL4H062Iidqvv9WNUxwQ5A6G-w-kOidlMalhLT25hz7H8qZDbcMi-PRLSV4kQDD3Y4leAXXK67lCLp1p9JFHl07cbcfdatbHwe-eGx8H5b-BVzTIq-ggiOGGEqB4U2OVb3R6iyYwsxaSa3b5d40SYeCOEETQJ_79FXp642smcojt6B03VTDHoXCjDjs' }}" alt="Luxurious mobile cocktail bar at a night event">
        <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-slate-950/40"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
        <div class="max-w-3xl">
            <span class="inline-block text-xs text-primary tracking-[0.2em] mb-4 font-bold uppercase font-label">{{ $content['hero_label']->content ?? 'The Curated After-Hours' }}</span>
            <h1 class="text-6xl md:text-8xl font-bold mb-6 text-on-surface tracking-tight leading-none italic serif-font">
                {{ $content['hero_title']->content ?? 'Premium Mobile Bar Experience for Your Event' }}
            </h1>
            <p class="text-xl md:text-2xl text-on-surface-variant mb-10 leading-relaxed max-w-2xl">
                {{ $content['hero_description']->content ?? 'Cocktails. Atmosphere. Unforgettable moments. We bring the speakeasy soul to your most cherished celebrations.' }}
            </p>
            <div class="flex flex-wrap gap-4">
                <button class="gold-gradient text-on-primary-fixed px-8 py-4 rounded-xl text-lg font-bold hover:scale-95 transition-all flex items-center gap-2">
                    Request Offer
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
                <button class="glass-panel text-on-surface border border-outline-variant/30 px-8 py-4 rounded-xl text-lg font-semibold hover:bg-surface-container-high transition-all">
                    See Packages
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Services Section (Bento Style) -->
<section class="py-24 px-8 max-w-7xl mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
        <div class="max-w-2xl">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-primary">{{ $content['services_title']->content ?? 'Artisanal Occasions' }}</h2>
            <p class="text-on-surface-variant text-lg">{{ $content['services_description']->content ?? 'Beyond a bar, we provide a narrative. Every pour is a performance, every setup is a centerpiece.' }}</p>
        </div>
        <div class="hidden md:block h-[1px] flex-grow mx-12 bg-outline-variant/20"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- Large Card -->
        <div class="md:col-span-2 group relative overflow-hidden rounded-xl h-[400px]">
            <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="{{ isset($content['service_wedding_image']) && $content['service_wedding_image']->image_path ? (str_starts_with($content['service_wedding_image']->image_path, 'http') ? $content['service_wedding_image']->image_path : asset($content['service_wedding_image']->image_path)) : 'https://lh3.googleusercontent.com/aida-public/AB6AXuCzMVxgqbsCcTCChrVYm_lq25KQU9FTZpAwcv3XUS_1SPCEmG5nBofBrIlf8AiPs3hgDbfwSbxv3BnqLQsJCpO-hOR1cQAQhZymnaYL_aEoPKEH6aKZiBnAFNVO_-GHKTX24rlQGt0ItTdosM8yLVn8BPJQ8naZJKyqJoewHTKcJ5YUWBQ4xb2BtTCMqmrG2J2sHdQYaGn-sJdbGtCgK1c4j3ipgAD9NTUkOTOYTQsaWNUoYsmKfoC0Akq5a5Fr3YrMiQwRmvZCns8' }}" alt="Weddings">
            <div class="absolute inset-0 bg-gradient-to-t from-background/90 to-transparent p-8 flex flex-col justify-end">
                <span class="material-symbols-outlined text-primary mb-4 text-4xl">favorite</span>
                <h3 class="text-3xl font-bold mb-2">Weddings</h3>
                <p class="text-on-surface-variant">Elegant service for your big day, from signature bride & groom sips to champagne towers.</p>
            </div>
        </div>
        <!-- Standard Cards -->
        <div class="group glass-panel border border-outline-variant/10 rounded-xl p-8 hover:bg-surface-container-highest transition-colors">
            <span class="material-symbols-outlined text-primary mb-6 text-4xl" style="font-variation-settings: 'FILL' 1;">business_center</span>
            <h3 class="text-2xl font-bold mb-4">Corporate</h3>
            <p class="text-on-surface-variant text-sm leading-relaxed">Impress clients and reward teams with a sophisticated, seamless bar integration for galas and brand launches.</p>
        </div>
        <div class="group glass-panel border border-outline-variant/10 rounded-xl p-8 hover:bg-surface-container-highest transition-colors">
            <span class="material-symbols-outlined text-primary mb-6 text-4xl" style="font-variation-settings: 'FILL' 1;">celebration</span>
            <h3 class="text-2xl font-bold mb-4">Private</h3>
            <p class="text-on-surface-variant text-sm leading-relaxed">Birthdays, anniversaries, or 'just because'. We bring the high-end cocktail lounge to your living room.</p>
        </div>
        <div class="md:col-span-4 group relative overflow-hidden rounded-xl h-[300px]">
            <img class="w-full h-full object-cover opacity-50 transition-transform duration-700 group-hover:scale-105" src="{{ isset($content['service_festival_image']) && $content['service_festival_image']->image_path ? (str_starts_with($content['service_festival_image']->image_path, 'http') ? $content['service_festival_image']->image_path : asset($content['service_festival_image']->image_path)) : 'https://lh3.googleusercontent.com/aida-public/AB6AXuB2cJ8m7DnJ0BHw1yaBmMYaW4wJjsNNcMH73Z3JrkWH0JXBHkUbJapccSufFWM7RZw5tTmIMC8Z5iHmotmzISLKEkfmgroOlzzzsYD9GnH0qZeoqZty1AsbpiOc7T2A0ExDdiQxAj_hAaCALGt6fjig8k6aFc78RMGcTq1Ta-vtRlcqQqwh_7_lOl1QkgXSC8WUpyfb9BZA72lMtKCApFzR6hI5coYlYZJe9fsBbrShwdmncET1KYlBGiQe6HWKfA-Rptau-8aLg44' }}" alt="Festivals">
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center p-8">
                <span class="material-symbols-outlined text-tertiary mb-4 text-5xl">festival</span>
                <h3 class="text-4xl font-bold mb-2">Festivals & Large Scale</h3>
                <p class="text-on-surface-variant max-w-xl">High-volume mastery without sacrificing quality. Craft cocktails for the masses.</p>
            </div>
        </div>
    </div>
</section>

<!-- Packages Section (Tonal Layers) -->
<section class="tonal-shift-surface-container-low py-24">
    <div class="max-w-7xl mx-auto px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Tailored Collections</h2>
            <p class="text-on-surface-variant">Select the caliber of your evening.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Basic -->
            <div class="bg-surface-container p-8 rounded-xl border border-white/5 flex flex-col h-full hover:bg-surface-container-high transition-colors">
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-on-surface mb-2">Basic Tier</h3>
                    <div class="text-3xl font-bold text-primary">$1,200<span class="text-sm font-normal text-on-surface-variant">/event</span></div>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-lg">check_circle</span> 2 Professional Bartenders</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-lg">check_circle</span> 3 Core Cocktails + Beer/Wine</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-lg">check_circle</span> 4-Hour Service Window</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-lg">check_circle</span> Standard Rustic Bar Setup</li>
                </ul>
                <button class="w-full py-3 rounded-xl border border-outline font-semibold hover:bg-surface-variant transition-all">Inquire Now</button>
            </div>
            <!-- Premium -->
            <div class="bg-surface-container-high p-8 rounded-xl border-2 border-primary/30 relative flex flex-col h-full transform md:-translate-y-4 shadow-2xl scale-105">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 gold-gradient px-4 py-1 rounded-full text-on-primary-fixed text-xs font-bold uppercase tracking-widest">Most Requested</div>
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-on-surface mb-2">Signature Premium</h3>
                    <div class="text-3xl font-bold text-primary">$2,800<span class="text-sm font-normal text-on-surface-variant">/event</span></div>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-lg">check_circle</span> 3 Master Mixologists</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-lg">check_circle</span> 6 Custom Craft Cocktails</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-lg">check_circle</span> Full Garnish & Bitters Bar</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-lg">check_circle</span> Signature Marble-Effect Bar</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-lg">check_circle</span> Personalized Printed Menus</li>
                </ul>
                <button class="w-full py-3 rounded-xl gold-gradient text-on-primary-fixed font-bold hover:opacity-90 transition-all">Select Experience</button>
            </div>
            <!-- VIP -->
            <div class="bg-surface-container p-8 rounded-xl border border-white/5 flex flex-col h-full hover:bg-surface-container-high transition-colors">
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-on-surface mb-2">The Alchemist VIP</h3>
                    <div class="text-3xl font-bold text-primary">Custom<span class="text-sm font-normal text-on-surface-variant"> pricing</span></div>
                </div>
                <ul class="space-y-4 mb-10 flex-grow">
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-lg">check_circle</span> Bespoke Liquid Catering</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-lg">check_circle</span> Rare Spirits & Vintage Bottles</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-lg">check_circle</span> Molecular Mixology Show</li>
                    <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-primary text-lg">check_circle</span> Glassmorphism Custom Bar</li>
                </ul>
                <button class="w-full py-3 rounded-xl border border-outline font-semibold hover:bg-surface-variant transition-all">Request VIP Quote</button>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-24 px-8 max-w-7xl mx-auto">
    <h2 class="text-4xl font-bold mb-12 text-center serif-font">{{ $content['vibe_title']->content ?? 'Visual Narrative' }}</h2>
    <div class="columns-1 md:columns-3 gap-6 space-y-6">
        <div class="relative overflow-hidden rounded-xl group cursor-pointer">
            <img class="w-full transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzJkddflFWYpiGtNyoRDyBVFos3oEO2v1QKPOtVo-0FwybO0cWSEZbmQv25GsN-RG8XAleM3aII5WFdCfUC90hbc0Fw5ZVxEmE_2mWwzt5g1gt8Iczyfpw97k9r9g0TL8V0EcOq9fm-B_2PTGd1rIdbIowLWjt-DQcRq9JNSzgLtHD4xnzhZmF5A3EPrNpoEdLVJEq4Y3LxMHJW-Cu-w_11y6Q9aP3dYbaIb626Fpk4A37XXb59Dzi8orkNg_kUYoNhZvb_i7TPqQ" alt="Cocktail 1">
            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
        </div>
        <div class="relative overflow-hidden rounded-xl group cursor-pointer">
            <img class="w-full transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUtJw-XH9p6NrHGsvOjyr_RvqWZ9MHfUp8Ry1sZ_bgbawGN-3_fi8HkPgel3f0T3D_ztuIFzGVC1mnpAqc_NLXJtYPDsH7tVP6m5zqRjJnLTuYsrARacQBOhxU4mImrAvhuYMQXevXOpJlKS0EkJ9WaCCirMU4t6aGgjNwMK_pkE_fELhmGcwHB-IUylvNfMOVIh78se_7JhLryIdZqjl5YgZneM94C0K4zwP67lsYxADAvhdfjljh6Yv5WCC24ZUQNpnK-MpEmys" alt="Cocktail 2">
            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
        </div>
        <div class="relative overflow-hidden rounded-xl group cursor-pointer">
            <img class="w-full transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9t3wMdEeaLhtUCst1_F256XToIzZG44-3d1-ol0quv3vTA1jadg_re-4Lg_9C07Q0jJtRUydk_zM-jSSw1pudZ3BHjmIhxATuBXU50IXltV8FaGY89zycACAKCFUuGJbnbpvk85sYjx80rGJ24xf4JaN_3ikHEXVxxybfWTbhcP7YGmV2AjYEeOsgqiSTg3nA0DU4jxMODeK3L1KE_8gLMdDJksG1yCS-TUlnLqE-txPJjc-FBTimKykgUvha-9LyyYahfX7V224" alt="Cocktail 3">
            <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
        </div>
    </div>
</section>

<!-- Booking Section -->
<section class="py-24 px-8 max-w-4xl mx-auto" id="booking">
    <div class="bg-surface-container-high rounded-3xl p-12 relative overflow-hidden shadow-2xl">
        <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-primary/5 rounded-full blur-[100px]"></div>
        <div class="relative z-10">
            <h2 class="text-4xl font-bold mb-4 text-center serif-font">{{ $content['booking_title']->content ?? 'Reserve Your Date' }}</h2>
            <p class="text-on-surface-variant text-center mb-10">{{ $content['booking_description']->content ?? "Tell us about your event and we'll craft a personalized offer within 24 hours." }}</p>
            @if(session('success'))
                <div class="mb-8 p-6 rounded-2xl bg-primary/10 border border-primary/20 text-primary text-center">
                    <span class="material-symbols-outlined block text-4xl mb-2">check_circle</span>
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('booking.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold mb-2 text-on-surface-variant">Your Name</label>
                        <input name="client_name" class="w-full bg-surface-container-lowest border border-white/5 rounded-xl px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all placeholder:text-slate-700 font-medium" placeholder="John Doe" type="text" required/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2 text-on-surface-variant">Email Address</label>
                        <input name="client_email" class="w-full bg-surface-container-lowest border border-white/5 rounded-xl px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all placeholder:text-slate-700 font-medium" placeholder="john@example.com" type="email" required/>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold mb-2 text-on-surface-variant">Phone Number</label>
                        <input name="client_phone" class="w-full bg-surface-container-lowest border border-white/5 rounded-xl px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all placeholder:text-slate-700 font-medium" placeholder="+40 7xx xxx xxx" type="tel"/>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2 text-on-surface-variant">Event Date</label>
                        <input name="event_date" class="w-full bg-surface-container-lowest border border-white/5 rounded-xl px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-medium" type="date" required/>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold mb-2 text-on-surface-variant">Event Type</label>
                        <select name="event_type_id" class="w-full bg-surface-container-lowest border border-white/5 rounded-xl px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all font-medium text-slate-300">
                            @foreach($eventTypes as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2 text-on-surface-variant">Estimated Guests</label>
                        <input name="guest_count" class="w-full bg-surface-container-lowest border border-white/5 rounded-xl px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all placeholder:text-slate-700 font-medium" placeholder="e.g. 150" type="number"/>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-semibold mb-2 text-on-surface-variant">Additional Vision / Details</label>
                    <textarea name="message" rows="4" class="w-full bg-surface-container-lowest border border-white/5 rounded-xl px-4 py-3 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all placeholder:text-slate-700 font-medium" placeholder="Describe the atmosphere you want to create..."></textarea>
                </div>

                <button class="w-full gold-gradient text-on-primary-fixed py-5 rounded-xl text-lg font-bold hover:scale-[0.99] transition-all shadow-lg shadow-primary/20 mt-4" type="submit">
                    Request Custom Offer
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
