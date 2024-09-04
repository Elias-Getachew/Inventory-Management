<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index(Request $request)
    {
        
         $categories = Category::latest()->paginate(3);
        $allCategories =Category::all();
          $query = Product::query();

    if ($request->query('category')) {
        $categoryId = $request->query('category');
        $query->where('category_id', $categoryId);
    }

    if ($request->query('sort')) {
        if ($request->query('sort') == 'ascPrice') {
            $query->orderBy('price', 'asc');
        } elseif ($request->query('sort') == 'descPrice') {
            $query->orderBy('price', 'desc');
        }
    }

    $products = $query->paginate(12); // Paginate results

          if ($request->ajax()) {
            return view('ecommerce.partials.products', compact('products'))->render();
        }
        return view('ecommerce.index', compact('products', 'categories','products','allCategories'));
    }


    //   public function filterByCategory($categoryId)
    // {
    //     $categories = Category::all();
    //     $products = Product::where('category_id', $categoryId)->get();
    //     return view('products.index', compact('categories', 'products'));
    // }
}
