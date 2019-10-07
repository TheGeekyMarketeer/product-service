<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\resources\ProductCollection;
use App\Product;
use App\SubCategories;
use App\Vendors;
use App\http\resources\ProductResource;


class ProductsController extends Controller
{
     public function index()
    {
        return new ProductCollection(Product::all());
    }

     public function store(Request $request, $vendorId, $categoryId) {
    

        $category = SubCategories::findOrFail($categoryId);
        $vendors = Vendors::findOrFail($vendorId);
        
        $product = new Product;
        $product->vendors()->associate($vendors);
        $product->categories()->associate($category);


        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->productAvailable = $request->productAvailable;

        $product->push();
        
        return (new ProductResource($product))->response()->setStatusCode(201);
    }
}
