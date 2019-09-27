<?php

use App\HomeItem;
use Illuminate\Database\Seeder;

class HomeItemSeeder extends Seeder
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
            ['id' => 1, 'image' => '/images/page3_img1.jpg', 'title' => 'Über uns', 'description' => '<p>	
            Willkommen in der letzten Veranstaltung in der Stadt. <a href="index-2.html">wunderino</a> gute Musik und Tanzaufführungen. </p>'],

            ['id' => 2, 'image' => '/images/page3_img2.jpg', 'title' => 'Geschehen', 'description' => '<ul class="list1">
            <li>Deutschland war schon immer ein sehr bekanntes Touristenziel für alle und mein Vater persönlich wie Deutschland und wollte immer wieder nach Deutschland und dank dem Royale wunderino Club, wegen dessen der Traum meines Vaters erfüllt wird, wie sie angeboten haben und organisierte eine Reise dort für ihre Mitglieder. </li>
        
        </ul>'],

            ['id' => 3, 'image' => '/images/page3_img3.jpg', 'title' => 'Leistungen', 'description' => '<div class="wrapper">
            <span class="date"><span>Club</span></span>
            <p>	
                Mit 5 Millionen Menschen Berlin ist Deutschland der größte und einer der größten Städte Europas aus einer Population Perspektive. Reich an Geschichte, sowie als globaler Hot Spot für Kultur, Kunst, Restaurants, Clubs und Cafés. Wir bestiegen unser Flug nach Deutschland.
            </p>
        </div>'],
        ];

        foreach ($items as $item) {
            HomeItem::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
