<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    //
    protected $table = "table_gallery_categories";

    public function galleries()
    {
        return $this->hasMany("App\Gallery", "category_id");
    }
}
