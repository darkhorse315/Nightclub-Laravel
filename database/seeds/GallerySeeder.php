<?php

use App\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
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
            ['id' => 1, 'image' => '/images/page3_img1.jpg', 'category_id' => 1, 'large_image' => '/images/big_img1.jpg'],
            ['id' => 2, 'image' => 'images/page3_img2.jpg', 'category_id' => 1, 'large_image' => '/images/big_img2.jpg'],
            ['id' => 3, 'image' => 'images/page3_img3.jpg', 'category_id' => 1, 'large_image' => '/images/big_img3.jpg'],
            ['id' => 4, 'image' => 'images/page3_img4.jpg', 'category_id' => 1, 'large_image' => '/images/big_img4.jpg'],
            ['id' => 5, 'image' => 'images/page3_img5.jpg', 'category_id' => 2, 'large_image' => '/images/big_img5.jpg'],
            ['id' => 6, 'image' => 'images/page3_img6.jpg', 'category_id' => 2, 'large_image' => '/images/big_img6.jpg'],
            ['id' => 7, 'image' => 'images/page3_img7.jpg', 'category_id' => 2, 'large_image' => '/images/big_img7.jpg'],
            ['id' => 8, 'image' => 'images/page3_img8.jpg', 'category_id' => 3, 'large_image' => '/images/big_img8.jpg'],
            ['id' => 9, 'image' => 'images/page3_img9.jpg', 'category_id' => 3, 'large_image' => '/images/big_img9.jpg'],
            ['id' => 10, 'image' => 'images/page3_img1.jpg', 'category_id' => 3, 'large_image' => '/images/big_img1.jpg'],
            ['id' => 11, 'image' => 'images/page3_img2.jpg', 'category_id' => 3, 'large_image' => '/images/big_img2.jpg'],
            ['id' => 12, 'image' => 'images/page3_img3.jpg', 'category_id' => 4, 'large_image' => '/images/big_img3.jpg'],
            ['id' => 13, 'image' => 'images/page3_img4.jpg', 'category_id' => 4, 'large_image' => '/images/big_img4.jpg'],
            ['id' => 14, 'image' => 'images/page3_img5.jpg', 'category_id' => 4, 'large_image' => '/images/big_img5.jpg'],
            ['id' => 15, 'image' => 'images/page3_img6.jpg', 'category_id' => 4, 'large_image' => '/images/big_img6.jpg'],
            ['id' => 16, 'image' => 'images/page3_img7.jpg', 'category_id' => 5, 'large_image' => '/images/big_img7.jpg'],
        ];

        foreach ($items as $item) {
            Gallery::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
