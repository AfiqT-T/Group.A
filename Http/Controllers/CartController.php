<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function showCart()
    {
        $cartItems = Cart::all();

        $totalPrice = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        // Pass the cart items and total price to the view
        return view('cart', compact('cartItems', 'totalPrice'));
    }

    // public function remove($menu_id)
    // {
    //     // Find the cart item by menu_id
    //     $item = Cart::where('menu_id', $menu_id)->first();

    //     if ($item) {
    //         $item->delete();
    //         return redirect() - route('cart');
    //     }

    //     return redirect()->route('cart.show')->with('error', 'Item not found.');
    // }
    public function showPaymentPage()
    {
        // Get all cart items
        $cartItems = Cart::all();

        // Calculate total price
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        // Pass cart items and total price to the view
        return view('payment', compact('cartItems', 'totalPrice'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
