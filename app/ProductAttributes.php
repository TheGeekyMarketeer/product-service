<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttributes extends Model
{
    protected $fillable = [
        'name',
        'key'
    ];

    public function subCategories(){
        return $this->belongsTo(SubCategories::class, "subCategoryId");
    }
}
