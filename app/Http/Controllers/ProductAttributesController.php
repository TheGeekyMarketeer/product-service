<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategories;
use App\ProductAttributes;
use App\http\resources\ProductAttribute;

class ProductAttributesController extends Controller
{
    public function store($id, Request $request) {
        $subCategory = SubCategories::findOrFail($id);
        $productAttribute = new ProductAttributes;
        $productAttribute->name = $request->name;
        $productAttribute->key = $request->key;
        
        $subCategory->productAttributes()->save($productAttribute);
        return (new ProductAttribute($productAttribute))->response()->setStatusCode(201);
    }
}
