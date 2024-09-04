<?php

use App\Models\Sale;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\EcommerceController;
Route::get('/', function () {
    return view('welcome');
});


// Route::get('/ecommerce', function () {
//     return view('ecommerce.home');
// });
Route::get('/ecommerce', [EcommerceController::class, 'index'])->name('ecommerce.index');
Route::get('cart', [cartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::patch('/update-cart', [CartController::class, 'update'])->name('update_cart');
Route::delete('/remove-from-cart', [CartController::class, 'remove'])->name('remove_from_cart');

// Route::get('/category/{id}', [EcommerceController::class, 'filterByCategory'])->name('products.filter');

Route::get('/dashboard', function () {
    $customers = Customer::count();
    $suppliers = Supplier::count();
    $categories = Category::count();
    $products = Product::count();
    $sales = Sale::count();
    return view('dashboard',compact('customers','suppliers','categories','products','sales'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {



  Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');

    //


    Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');

    //

    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Resource routes
    Route::resource('customers', CustomerController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('suppliers', SupplierController::class);
    Route::resource('products', ProductController::class);
    Route::resource('purchases', PurchaseController::class);
    Route::resource('sales', SaleController::class);
});

require __DIR__.'/auth.php';
