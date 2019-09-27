<?php

use App\GalleryCategory;
use Illuminate\Database\Seeder;

class GalleryCategorySeeder extends Seeder
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
            ['id' => 1, 'title' => 'wunderino'],
            ['id' => 2, 'title' => 'Nachtclub'],
            ['id' => 3, 'title' => 'Partei'],
            ['id' => 3, 'title' => 'Fotograf'],
            ['id' => 3, 'title' => 'Geschehen'],
        ];

        foreach ($items as $item) {
            GalleryCategory::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
