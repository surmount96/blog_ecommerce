<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // return $request;
        $input = $request->all();
        $input['cover_image_url'] = 'cool';
        $input['slug'] = Str::slug($input['product_name'],'-');
        Product::create($input);
        return response()->json(['status' => 201,'message' => 'successfully']);
    }

    public function allProduct()
    {
        $products = Product::latest()->get();

        return response()->json(['status' => 201,'products' => $products]);
    }

    public function publicProduct()
    {
        $products = Product::latest()->get();

        return response()->json(['status' => 201,'products' => $products]);
    }

    public function show()
    {
        $product = Product::where('slug',request()->slug)->first();

        return response()->json(['status' => 201,'product' => $product]);
    }
}
