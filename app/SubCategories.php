<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    protected $fillable = [
        'name', 
        'description'
    ];
    
    public function productAttributes(){
        return $this->hasMany(ProductAttributes::class, "subCategoryId", "id" );
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'categoryId');
    }
}
