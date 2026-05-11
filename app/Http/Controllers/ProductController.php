<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductSize;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $productId;

    public function index()
    {
        return view('admin.product.index',['products' => Product::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create',
            [
                'categories'     => Category::where('status',1)->get(),
                'subCategories'  => SubCategory::where('status',1)->get(),
                'brands'         => Brand::where('status',1)->get(),
                'units'          => Unit::where('status',1)->get(),
                'colors'         => Color::all(),
                'sizes'          => Size::all()
            ]);
    }

    public function getSubCategory()
    {
        $categoryId = $_GET['id'];
        $subCategories = SubCategory::where('category_id', $categoryId)->get();
        return response()->json($subCategories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required|string|max:255|unique:products,name',
            'code'              => 'required|string|max:50|unique:products,code',
            'category_id'       => 'required|integer',
            'sub_category_id'   => 'required|integer',
            'brand_id'          => 'required|integer',
            'unit_id'           => 'required|integer',
            'regular_price'     => 'required|numeric',
            'selling_price'     => 'required|numeric',
            'stock_amount'      => 'required|integer',
            'image'             => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ], [

            'name.unique'        => 'This name already exist',
            'code.unique'        => 'This code already exist',
            'category_id'        => 'select category',
            'sub_category_id'    => 'select category',
            'brand_id'           => 'select brand',
            'unit_id'            => 'select unit',
            'image'              => 'Select image',
            'regular_price'      => 'select price',
            'selling_price'      => 'select price',
            'stock_amount'       => 'select price',
        ]);

        $this->productId = Product::saveNewProduct($request);
        ProductImage::newProductImage($request->file('other_image'), $this->productId);
        ProductColor::saveProductColor($request->color, $this->productId);
        ProductSize::saveProductSize($request->size, $this->productId);
        return back()->with('message', 'Product info create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show',['product' =>Product:: find($product->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit',
            [
                'categories'     => Category::where('status',1)->get(),
                'subCategories'  => SubCategory::where('status',1)->get(),
                'brands'         => Brand::where('status',1)->get(),
                'units'          => Unit::where('status',1)->get(),
                'colors'         => Color::all(),
                'sizes'          => Size::all(),
                'product'        => Product::find($product->id)
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        Product::updateProduct($request, $product->id);
        if($request->file('other_image'))
        {
            ProductImage::updateProductImage($request->file('other_image'), $product->id);
        }
        ProductColor::updateProductColor($request->color, $product->id);
        ProductSize::updateProductSize($request->size, $product->id);
        return redirect('/product')->with('message', 'Product info update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::deleteProduct($product->id);
        return redirect('/product')->with('message', 'Product info delete successfully.');
    }
}
