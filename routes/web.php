<?php

use App\Models\Sale;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ecommerce', function () {
    $customers = Customer::all();
    $suppliers = Supplier::all();
    $categories = Category::all();
    $products = Product::all();
    $sales = Sale::all();
    return view('ecommerce.home',compact('customers','suppliers','categories','products','sales'));
});

Route::get('/dashboard', function () {
    $customers = Customer::count();
    $suppliers = Supplier::count();
    $categories = Category::count();
    $products = Product::count();
    $sales = Sale::count();
    return view('dashboard',compact('customers','suppliers','categories','products','sales'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
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
