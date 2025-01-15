<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Cart;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display the menu.
     */
    public function index()
    {
        $menus = Menu::all(); // Fetch all menu items
        return view('menu', compact('menus'));
    }

    /**
     * Add an item to the cart.
     */
    public function addToCart(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'menu_id' => 'required|exists:menus,menu_id',
            'menu_name' => 'required|string',
            'vendor_id' => 'required|string',
            'vendor_name' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
        ]);

        // Create a new cart entry
        $cart = new Cart();
        $cart->menu_id = $validated['menu_id'];
        $cart->menu_name = $validated['menu_name'];
        $cart->vendor_id = $validated['vendor_id'];
        $cart->vendor_name = $validated['vendor_name'];
        $cart->price = $validated['price'];
        $cart->quantity = $validated['quantity'];
        $cart->save();

        return redirect()->back()->with('success', 'Item added to cart!');
    }

    /**
     * Display the user's cart items.
     */

}
