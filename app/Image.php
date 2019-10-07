<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'imageUrl', 
        'secureImageUrl',
        'description', 
        'thumbnail'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
