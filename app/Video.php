<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'videoUrl', 
        'secureVideoUrl',
        'description'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
