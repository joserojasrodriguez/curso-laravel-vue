<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts(Request $request)
    {
        $data = [];
        $param = $request->input('query');
        $products = Product::query()->where('name', 'LIKE', '%' . $param . '%')
            ->take(10)
            ->get();


        foreach ($products as $product) {
            $data[] = [
                'id'    => $product->id,
                'name'  => $product->name,
                'text'  => $product->name,
                'price' => $product->price
            ];
        }

        return response()->json($data);

    }
}
