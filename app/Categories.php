<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'name', 
        'description'
    ];

    public function subCategories()
    {
        return $this->hasMany(SubCategories::class, 'categoryId', 'id');
    }
}
