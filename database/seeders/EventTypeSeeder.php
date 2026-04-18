<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Wedding',
            'Private Party',
            'Corporate Event',
            'Birthday',
            'Festival',
            'Baptism',
            'Other'
        ];

        foreach ($types as $type) {
            \App\Models\EventType::updateOrCreate(
                ['slug' => \Illuminate\Support\Str::slug($type)],
                ['name' => $type]
            );
        }
    }
}
