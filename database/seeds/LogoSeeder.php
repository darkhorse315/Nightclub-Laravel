<?php

use App\SettingLogo;
use Illuminate\Database\Seeder;

class LogoSeeder extends Seeder
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
            ['id' => 1, 'image' => '/images/logo.png'],
        ];

        foreach ($items as $item) {
            SettingLogo::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
