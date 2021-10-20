<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        $product = Product::all();
        return response()->json($product, '200');
    }

    public function store(Request $request): JsonResponse
    {
        Product::create($request->all());
        return response()->json('success', 200);
    }

    public function update(Request $request): JsonResponse{
        Product::find($request->id)
            ->update($request->all());

        return response()->json('success','200');
    }

    public function destroy(Request $request): JsonResponse
    {
        Product::destroy($request->id);
        return response()->json('success', 200);
    }
}
