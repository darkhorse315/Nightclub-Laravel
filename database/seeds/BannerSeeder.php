<?php

use App\SettingBanner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
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
            ['id' => 1, 'image' => '/images/img1.png'],
            ['id' => 2, 'image' => '/images/img2.png'],

            ['id' => 3, 'image' => '/images/img3.png'],
            ['id' => 4, 'image' => '/images/img5.png'],

            ['id' => 5, 'image' => '/images/img4.png']

        ];

        foreach ($items as $item) {
            SettingBanner::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
