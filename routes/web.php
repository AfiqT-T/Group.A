<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\FeedbackController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('mainpage');
})->name('mainpage');

// Route::get('/', function () {
//     return view('mainpage');
// });

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/'); // Redirect to the main page after logout
})->name('logout');

Route::get('/orderhistory',[OrderController::class, 'index'])->name('orderhistory');


Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::post('/cart/add', [MenuController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/remove/{menu_id}', [CartController::class, 'remove'])->name('cart.remove');

// Route::get('/payment', [PaymentController::class, 'index'])->name('payment');


Route::get('/payment', [CartController::class, 'showPaymentPage'])->name('cart.showp');


Route::post('/payment', [PaymentController::class, 'processPayment'])->name('payment.process');
Route::get('/payment-success', [PaymentController::class, 'paymentSuccess'])->name('payment-success');

//Route::get('/payment-success', function(){return view('delivery');});


Route::get('/delivery', [DeliveryController::class, 'index'])->name('delivery');
Route::post('/delivery', [DeliveryController::class, 'store']);
Route::get('/generate-fake-data', [DeliveryController::class, 'generateFakeData']);


Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/feedback-form', [FeedbackController::class, 'create'])->name('feedback.form');
Route::post('/feedback-store', [FeedbackController::class, 'store'])->name('feedback.store');

// Route for the feedback received page
Route::get('/feedback-thank-you', function () {
    return view('feedback-thank-you');
})->name('feedback.thank-you');

