<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;

class MenuController extends Controller
{
    public function allCategories()
    {
        $categories = Category::all();
        return view('menu.allCategories', compact('categories'));
    }

    public function subcategories(Category $category)
    {
        $subcategories = Subcategory::where('cat_id', $category->cat_id)->get();
        return view('menu.subcategories', compact('subcategories', 'category'));
    }

    public function products(Category $category, Subcategory $subcategory)
    {
        $products = Product::where('subcat_id', $subcategory->subcat_id)->get();
        return view('menu.products', compact('products', 'category', 'subcategory'));
    }

    public function productDetails(Category $category, Subcategory $subcategory, Product $product)
    {
        return view('menu.productDetails', compact('product', 'category', 'subcategory'));
    }
}
