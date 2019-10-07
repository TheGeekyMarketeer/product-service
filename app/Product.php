<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'productAvailable'   
    ];

    public function categories(){
        return $this->belongsTo(SubCategories::class, "categoryId");
    }

    public function vendors(){
        return $this->belongsTo(Vendors::class, "vendorId");
    }

    public function image(){
        return $this->hasMany(Image::class, "imageId", "id");
    }

    public function video(){
        return $this->hasMany(Video::class, "videoId", "id" );
    }

}
