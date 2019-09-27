<?php

use App\SettingFooter;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
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
            ['id' => 1, 'image' => '/images/page1_img2.jpg', 'title' => 'Fotograf', 'description' => 'Promi-Wahn war schon <strong>wunderino Nachtclub</strong> immer ein interessantes Phänomen. Es war kein seltener Anblick an der Wand Poster der Lieblingsschauspieler und andere Prominente an den Wänden unserer Eltern und Großeltern in ihrer Kindheit Zimmer Fotografien zu sehen. Heute ist der Internet-Revolution und der technologische Fortschritt machen es uns möglich, speichern finden, speichern und heißen Fotos von Prominenten Online-Galerien.']
        ];

        foreach ($items as $item) {
            SettingFooter::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
