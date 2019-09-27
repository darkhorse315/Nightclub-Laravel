<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table = "table_galleries";

    public function category()
    {
        return $this->belongTo("App\GalleryCategory", "category_id");
    }
}
