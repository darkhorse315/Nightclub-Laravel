<?php

use App\SettingTitle;
use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
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
            ['id' => 1, 'title' => 'wunderino Nachtclub'],
        ];

        foreach ($items as $item) {
            SettingTitle::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
