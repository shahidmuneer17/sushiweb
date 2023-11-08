<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\ProductOption;

class MenuController extends Controller
{
    protected $categories;

    public function __construct()
    {
        $this->categories = Category::all();
    }

public function allCategories()
{
    $categories = $this->categories;
    return view('menu.allCategories', compact('categories'));
}

    public function subcategories(Category $category)
    {
        $categories = $this->categories;
        $subcategories = Subcategory::where('cat_id', $category->cat_id)->get();
        return view('menu.subcategories', compact('categories', 'subcategories', 'category'));
    }

    public function products(Category $category, Subcategory $subcategory)
    {
        $categories = $this->categories;
        $products = Product::where('subcat_id', $subcategory->subcat_id)->get();
        return view('menu.products', compact('categories', 'products', 'category', 'subcategory'));
    }

    public function productDetails(Category $category, Subcategory $subcategory, Product $product)
    {
        $categories = $this->categories;
        
        return view('menu.productDetails', compact('categories', 'product', 'category', 'subcategory'));
    }
}
