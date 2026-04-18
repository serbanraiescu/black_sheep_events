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

            // SERVICES SECTION
            [
                'page_name' => 'home',
                'section_key' => 'services_title',
                'content' => 'Artisanal Occasions',
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
            ContentSection::updateOrCreate(
                ['page_name' => $section['page_name'], 'section_key' => $section['section_key']],
                ['content' => $section['content']]
            );
        }
    }
}
