<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentSection;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            // HERO SECTION
            [
                'page_name' => 'home',
                'section_key' => 'hero_label',
                'content' => 'The Curated After-Hours',
            ],
            [
                'page_name' => 'home',
                'section_key' => 'hero_title',
                'content' => 'Premium Mobile Bar Experience for Your Event',
            ],
            [
                'page_name' => 'home',
                'section_key' => 'hero_description',
                'content' => 'Cocktails. Atmosphere. Unforgettable moments. We bring the speakeasy soul to your most cherished celebrations.',
            ],
            [
                'page_name' => 'home',
                'section_key' => 'hero_background',
                'content' => 'Hero Image',
                'image_path' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAFTYV1twmn97vM6f1e4v6VaORj6bY8MafQmDjRAc_Jqx3H1yowifYDeIXxo7gTgI6_Ub3bMqPhz6CMiVUFBL4H062Iidqvv9WNUxwQ5A6G-w-kOidlMalhLT25hz7H8qZDbcMi-PRLSV4kQDD3Y4leAXXK67lCLp1p9JFHl07cbcfdatbHwe-eGx8H5b-BVzTIq-ggiOGGEqB4U2OVb3R6iyYwsxaSa3b5d40SYeCOEETQJ_79FXp642smcojt6B03VTDHoXCjDjs',
            ],

            // SERVICES SECTION
            [
                'page_name' => 'home',
                'section_key' => 'services_title',
                'content' => 'Artisanal Occasions',
            ],
            [
                'page_name' => 'home',
                'section_key' => 'service_wedding_image',
                'content' => 'Wedding Service Image',
                'image_path' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCzMVxgqbsCcTCChrVYm_lq25KQU9FTZpAwcv3XUS_1SPCEmG5nBofBrIlf8AiPs3hgDbfwSbxv3BnqLQsJCpO-hOR1cQAQhZymnaYL_aEoPKEH6aKZiBnAFNVO_-GHKTX24rlQGt0ItTdosM8yLVn8BPJQ8naZJKyqJoewHTKcJ5YUWBQ4xb2BtTCMqmrG2J2sHdQYaGn-sJdbGtCgK1c4j3ipgAD9NTUkOTOYTQsaWNUoYsmKfoC0Akq5a5Fr3YrMiQwRmvZCns8',
            ],
            [
                'page_name' => 'home',
                'section_key' => 'service_festival_image',
                'content' => 'Festival Service Image',
                'image_path' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB2cJ8m7DnJ0BHw1yaBmMYaW4wJjsNNcMH73Z3JrkWH0JXBHkUbJapccSufFWM7RZw5tTmIMC8Z5iHmotmzISLKEkfmgroOlzzzsYD9GnH0qZeoqZty1AsbpiOc7T2A0ExDdiQxAj_hAaCALGt6fjig8k6aFc78RMGcTq1Ta-vtRlcqQqwh_7_lOl1QkgXSC8WUpyfb9BZA72lMtKCApFzR6hI5coYlYZJe9fsBbrShwdmncET1KYlBGiQe6HWKfA-Rptau-8aLg44',
            ],
            [
                'page_name' => 'home',
                'section_key' => 'services_description',
                'content' => 'Beyond a bar, we provide a narrative. Every pour is a performance, every setup is a centerpiece.',
            ],

            // ABOUT / VIBE SECTION
            [
                'page_name' => 'home',
                'section_key' => 'vibe_title',
                'content' => 'Visual Narrative',
            ],
            
            // BOOKING SECTION
            [
                'page_name' => 'home',
                'section_key' => 'booking_title',
                'content' => 'Reserve Your Date',
            ],
            [
                'page_name' => 'home',
                'section_key' => 'booking_description',
                'content' => "Tell us about your event and we'll craft a personalized offer within 24 hours.",
            ],
        ];

        foreach ($sections as $section) {
            ContentSection::firstOrCreate(
                ['page_name' => $section['page_name'], 'section_key' => $section['section_key']],
                [
                    'content' => $section['content'],
                    'image_path' => $section['image_path'] ?? null
                ]
            );
        }
    }
}
