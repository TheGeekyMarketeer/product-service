<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\SubCategories;
use App\http\resources\SubCategory;

class SubCategoriesController extends Controller
{
    public function store($id, Request $request) {
        $category = Categories::findOrFail($id);
        $subCategory = new SubCategories;
        $subCategory->name = $request->name;
        $subCategory->description = $request->description;
        
        $category->subCategories()->save($subCategory);
        return (new SubCategory($subCategory))->response()->setStatusCode(201);
    }
}
