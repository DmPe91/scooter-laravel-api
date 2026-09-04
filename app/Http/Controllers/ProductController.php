<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::with(['type', 'condition'])->get();
    }
     // Один товар
    public function show($id)
    {
        return Product::with(['type', 'condition'])->findOrFail($id);
    }
}