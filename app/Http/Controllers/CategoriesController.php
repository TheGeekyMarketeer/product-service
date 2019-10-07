<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Http\Resources\Category;
use App\Http\Resources\CategoryCollection;

class CategoriesController extends Controller
{
    public function index()
    {
        return new CategoryCollection(Categories::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:1055'
        ]);

        $category = Categories::create($request->all());

        return (new Category($category))
                ->response()
                ->setStatusCode(201);
    }

}
