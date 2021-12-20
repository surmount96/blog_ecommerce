<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // return $request;
        $input = $request->all();
        $file = $request->file('cover_image_url');
        $input['cover_image_url'] = '';

        if($request->hasFile('cover_image_url')){
            $ext = $file->getClientOriginalExtension();
            $path = 'product-'.time().'.'.$ext;
            $disk = 'public';
            Storage::disk($disk)->putFileAs('product',$file,$path);

            $input['cover_image_url'] = $path;
        }

        $input['slug'] = Str::slug($input['product_name'],'-');
        Product::create($input);
        return response()->json(['status' => 201,'message' => 'successfully']);
    }

    public function storeCategory(Request $request)
    {
        // return $request;
        $input = $request->all();
        $input['slug'] = Str::slug($input['name'],'-');
        Category::create($input);
        return response()->json(['status' => 201,'message' => 'successfully']);
    }

    public function allProduct()
    {
        $products = Product::latest()->get();

        return response()->json(['status' => 201,'products' => $products]);
    }

    public function getCategory()
    {
        $categories = Category::latest()->get();

        return response()->json(['status' => 201,'categories' => $categories]);
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

    public function countOrder()
    {
        $order = Order::all();
        return count($order);
    }

    public function allOrder()
    {
        $orders = Order::all();
        return response()->json(['status' => 201, 'orders' => $orders]);

    }

    public function updateOrder()
    {
        //
    }


}
