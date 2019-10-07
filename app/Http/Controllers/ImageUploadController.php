<?php

namespace App\Http\Controllers;

use JD\Cloudder\Facades\Cloudder;
use Illuminate\Http\Request;
use App\Product;

class ImageUploadController extends Controller
{
    public function uploadImages(Request $request, $productId)
    {
        $this->validate($request,[
           'image_name'=>'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',
        ]);
        $file_url = "";
        if ($request->hasFile('image_name') && $request->file('image_name')->isValid()){
            $cloudder = Cloudder::upload(
                $request->file('image')->getRealPath(), 
                null, 
                array(
                    "quality" => "auto", 
                    "width" => 120, 
                    "height" => 80
                )
            );
            $uploadResult = $cloudder->getResult();
            $file_url = $uploadResult["url"];

            if ($file_url != "") {
                $product = Product::findOrFail($productId);
                
            }
        }
        return response()->json(['file_url' => $file_url], 200);
    }

}
