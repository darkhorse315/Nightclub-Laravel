<?php

use App\Gallery;
use App\GalleryCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(ClubSeeder::class);

        $this->call(FooterSeeder::class);
        $this->call(GalleryCategorySeeder::class);

        $this->call(GallerySeeder::class);
        $this->call(HelpSeeder::class);

        $this->call(HomeItemSeeder::class);
        $this->call(LogoSeeder::class);

        $this->call(MenuSeeder::class);
        $this->call(TitleSeeder::class);

    }
}
