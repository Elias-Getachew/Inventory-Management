<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'supplier'])->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('products.create', compact('categories', 'suppliers'));
    }

    public function store(Request $request)
    {
        // **Validation**
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quantity' => 'nullable|string',
        ]);

        // **Handling Photo Upload**
        if ($request->hasFile('photo')) {
            $imageName = time().'_'.uniqid().'.'.$request->photo->extension();
            $request->photo->storeAs('public/products', $imageName);
            $validatedData['photo'] = 'products/'.$imageName;
        }

        // **Creating the Product**
        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('products.edit', compact('product', 'categories', 'suppliers'));
    }

    public function update(Request $request, Product $product)
    {
        // **Validation**
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'quantity'=> 'nullable',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // **Handling Photo Upload**
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($product->photo && Storage::exists('public/'.$product->photo)) {
                Storage::delete('public/'.$product->photo);
            }

            $imageName = time().'_'.uniqid().'.'.$request->photo->extension();
            $request->photo->storeAs('public/products', $imageName);
            $validatedData['photo'] = 'products/'.$imageName;
        }

        // **Updating the Product**
        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        // **Delete photo if exists**
        if ($product->photo && Storage::exists('public/'.$product->photo)) {
            Storage::delete('public/'.$product->photo);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
