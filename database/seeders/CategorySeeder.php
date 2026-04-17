<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Transformer',
                'icon' => 'fa-bolt',
                'description' => 'Power transformers and electrical distribution equipment'
            ],
            [
                'name' => 'Generator',
                'icon' => 'fa-plug',
                'description' => 'Diesel and gas generators'
            ],
            [
                'name' => 'Solar',
                'icon' => 'fa-sun',
                'description' => 'Solar panels and inverter systems'
            ],
            [
                'name' => 'Lift',
                'icon' => 'fa-elevator',
                'description' => 'Passenger and freight elevators'
            ],
            [
                'name' => 'Pump',
                'icon' => 'fa-water',
                'description' => 'Industrial and domestic pumps'
            ],
            [
                'name' => 'BBT',
                'icon' => 'fa-plug',
                'description' => 'Bus Bar Trunking system'
            ],
            [
                'name' => 'AVR',
                'icon' => 'fa-tachometer-alt',
                'description' => 'Automatic Voltage Regulators'
            ],
            [
                'name' => 'Switchgear',
                'icon' => 'fa-cogs',
                'description' => 'LV, MV & HV Switchgear systems'
            ],
        ];

        foreach ($categories as $cat) {
            Category::create([
                'name' => $cat['name'],
                'slug' => Str::slug($cat['name']),
                'description' => $cat['description'],
                'icon' => $cat['icon'],
                'status' => true
            ]);
        }
    }
}