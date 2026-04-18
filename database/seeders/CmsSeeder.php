<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\Menu;
use App\Models\MenuItem;

class CmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Settings
    Setting::insert([
        ['key' => 'site_name', 'value' => 'Mukti Power Pvt Ltd'],
        ['key' => 'site_logo', 'value' => 'assets/images/logo.png'],
        ['key' => 'footer_text', 'value' => 'Supplying Quality Electrical Equipment Across Bangladesh'],
        ['key' => 'office_address', 'value' => 'Dhaka, Bangladesh'],
        ['key' => 'factory_address', 'value' => 'Dhaka, Bangladesh'],
        ['key' => 'company_email', 'value' => 'muktipowerpvtltd@gmail.com'],
        ['key' => 'company_phone', 'value' => '+880 1553-436939'],
    ]);

    // Menu
    $menu = Menu::create(['name' => 'header']);

    MenuItem::insert([
        ['menu_id' => $menu->id, 'title' => 'Home', 'url' => '#home', 'order' => 1],
        ['menu_id' => $menu->id, 'title' => 'About', 'url' => '#about', 'order' => 2],
        ['menu_id' => $menu->id, 'title' => 'Solutions', 'url' => '#solutions', 'order' => 3],
        ['menu_id' => $menu->id, 'title' => 'Products', 'url' => '#products', 'order' => 4],
        ['menu_id' => $menu->id, 'title' => 'Why Us', 'url' => '#whyus', 'order' => 5],
        ['menu_id' => $menu->id, 'title' => 'Contact', 'url' => '#contacts', 'order' => 6],
    ]);
    }
}
