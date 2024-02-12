<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('photos')->get();
        return response()->json($products);
    }

    public function show($id)
    {

        $product = Product::with('photos')->find($id);

        return Inertia::render('Product', [
            'product' => $product
        ]);
    }
}
