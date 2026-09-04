<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\BasketProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    // Получить корзину
    public function index()
    {
        $basket = Basket::firstOrCreate(['session_id' => 'default']);
        return $basket->load('products');
    }

    // Добавить товар в корзину
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'integer|min:1'
        ]);

        $basket = Basket::firstOrCreate(['session_id' => 'default']);

        $basketProduct = BasketProduct::updateOrCreate(
            [
                'basket_id' => $basket->id,
                'product_id' => $request->product_id,
            ],
            [
                'quantity' => $request->quantity ?? 1,
            ]
        );

        return response()->json($basketProduct, 201);
    }

    // Удалить товар из корзины
    public function destroy($productId)
    {
        $basket = Basket::firstOrCreate(['session_id' => 'default']);

        BasketProduct::where('basket_id', $basket->id)
                     ->where('product_id', $productId)
                     ->delete();

        return response()->json(['message' => 'Товар удален из корзины']);
    }
}