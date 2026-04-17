<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $transformer = Category::where('name', 'Transformer')->first();
        $generator = Category::where('name', 'Generator')->first();
        $solar = Category::where('name', 'Solar')->first();

        $products = [
            [
                'category_id' => $transformer->id,
                'title' => 'Three Phase Transformer',
                'short_description' => 'High efficiency power transformer',
                'description' => 'Best quality transformer for industrial use with low loss and high durability.',
                'features' => [
                    'Copper winding',
                    'Low energy loss',
                    'High durability',
                    'Overload protection'
                ],
                'image1' => 'assests/images/tf1.png'
            ],
            [
                'category_id' => $generator->id,
                'title' => 'Diesel Generator',
                'short_description' => 'Reliable backup power solution',
                'description' => 'Industrial diesel generator with auto start system and fuel efficiency.',
                'features' => [
                    'Auto start system',
                    'Low noise',
                    'Fuel efficient',
                    'Digital control panel'
                ],
                'image1' => 'assests/images/gen1.png'
            ],
            [
                'category_id' => $solar->id,
                'title' => 'Solar Panel System',
                'short_description' => 'Clean energy solution',
                'description' => 'High efficiency solar panel with inverter and battery backup system.',
                'features' => [
                    'MPPT technology',
                    'High efficiency panels',
                    'Long life battery',
                    'Weather resistant'
                ],
                'image1' => 'assests/images/solar1.png'
            ],
        ];

        foreach ($products as $prod) {
            Product::create([
                'category_id' => $prod['category_id'],
                'title' => $prod['title'],
                'slug' => Str::slug($prod['title']),
                'short_description' => $prod['short_description'],
                'description' => $prod['description'],
                'features' => $prod['features'], // cast to JSON automatically
                'image1' => $prod['image1'],
                'status' => true
            ]);
        }
    }
}