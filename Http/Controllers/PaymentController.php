<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
{
    // Validate the payment method
    $request->validate([
        'payment_method' => 'required|string|in:Credit Card,Cash,Online Banking',
    ]);

    // Retrieve the cart items from session or database
    $cartItems = session('cart_items', []); // Make sure cart items exist in the session

    // Calculate total price
    $totalPrice = collect($cartItems)->sum(function ($item) {
        return $item['price'] * $item['quantity'];
    });

    // Create a new payment record
    $payment = new Payment();
    $payment->payment_id = '#016';
    $payment->order_id = '#016';  // Set static order_id
    $payment->payment_type = $request->input('payment_method');
    $payment->payment_total = $totalPrice;
    $payment->save();

    // Store data in session for payment success page
    session([
        'payment_total' => $totalPrice,  // Save the total price in the session
        'payment_method' => $request->input('payment_method'),
    ]);

    // Redirect to payment success page
    return redirect()->route('payment-success');
}

public function paymentSuccess()
{
    // Retrieve data from session
    $totalPrice = session('payment_total', 0);  // Default to 0 if not found
    $paymentMethod = session('payment_method', 'N/A');  // Default to 'N/A' if not found

    // Return the success view with dynamic data
    return view('payment-success', [
        'totalPrice' => $totalPrice,
        'paymentMethod' => $paymentMethod,
    ]);
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = DB::table('payments')->get();
        return view('payment', ['payments' => $payments]);
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
        $payment = new Payment();
        $payment->payment_id = $request->payment_id;
        $payment->order_id = $request->order_id;
        $payment->payment_type = $request->payment_type;
        $payment->payment_total = $request->payment_total;
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
