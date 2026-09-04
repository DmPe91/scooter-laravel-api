<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(Request $request)
{
    $query = Product::with(['type', 'condition']);

    if ($request->has('type_id') && $request->type_id != '') {
        $query->where('type_id', $request->type_id);
    }

    if ($request->has('condition_id') && $request->condition_id != '') {
        $query->where('condition_id', $request->condition_id);
    }

    return $query->get();
}
     // Один товар
    public function show($id)
    {
        return Product::with(['type', 'condition'])->findOrFail($id);
    }
}