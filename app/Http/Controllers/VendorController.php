<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendors;
use App\Http\resources\VendorCollection;
use App\Http\resources\Vendor;

class VendorController extends Controller
{
    public function index()
    {
        return new VendorCollection(Vendors::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            
        ]);

        $category = Vendors::create($request->all());

        return (new Vendor($category))
                ->response()
                ->setStatusCode(201);
    }
}
