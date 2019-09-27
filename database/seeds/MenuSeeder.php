<?php

use App\SettingMenu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $items = [            
            ['id' => 1, 'menu' => 'Haus'],
            ['id' => 2, 'menu' => 'über'],
            ['id' => 3, 'menu' => 'Geschehen'],
            ['id' => 4, 'menu' => 'Galerie'],
            ['id' => 5, 'menu' => 'Kontakt'],
            ['id' => 6, 'menu' => 'Bezug'],
        ];

        foreach ($items as $item) {
            SettingMenu::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
