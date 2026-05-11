<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\Brand;

class WolmartController extends Controller
{
    public function index()
    {
        return view('website.home.index',
            [
                'products' => Product::where('status',1)->get(),
                'brands' => Brand::all()
            ]);
    }
    public function product($id)
    {
        return view('website.product.index',
            [

                'products' => Product::where('category_id', $id)->latest()->get(),
                'brands' => Brand::all(),
                'categories' => Category::all()

            ] );
    }
    public function subCategoryProduct($id)
    {
        return view('website.product.index', ['products' => Product::where('sub_category_id', $id)->latest()->get()]);
    }
    public function productDetails($id,$slug)
    {
        return view('website.product.details',
            [
                'product'       => Product::where('slug',$slug)->first(),
                'productImages' => ProductImage::where('product_id',$id)->get(),
            ]);
    }
    public function brandShop($id)
    {
        // Fetch products that belong to this brand
        $products = Product::where('brand_id', $id)
            ->where('status', 1)
            ->paginate(12); // Use paginate or get()

        // Optionally fetch categories or the brand name for the UI
        $brand = Brand::findOrFail($id);

        return view('website.home.index', compact('products', 'brand'));
    }
    public function categoryShop($id)
    {
        // Fetch products that belong to this brand
        $products = Product::where('category_id', $id)
            ->where('status', 1)
            ->paginate(12); // Use paginate or get()

        // Optionally fetch categories or the brand name for the UI
        $brand = Brand::findOrFail($id);

        return view('website.product.index', compact('products', 'category'));
    }
}
