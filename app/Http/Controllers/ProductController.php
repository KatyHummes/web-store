<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestProduct;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create()
    {
        return Inertia::render('CreateProduct');
    }

    public function store(RequestProduct $request)
    {
        // dd($request->all());
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price
        ]);

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $photoPath = $photo->store('photos', 'public');

                Photo::create([
                    'product_id' => $product->id,
                    'photo_path' => $photoPath
                ]);
            }
        }
    }

    public function index() {
        $produtos = Product::with('photos')->get();
        return response()->json($produtos);
    }
    
    
}
