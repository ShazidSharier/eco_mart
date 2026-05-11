@extends('admin.master')
@section('body')
    <div class="main-container container-fluid">
        <!-- start page title -->
        <div class="page-header">
            <div>
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Product</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Product Tables</a></li>
                                    <li class="breadcrumb-item active">Product</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom d-flex justify-content-between">
                                <h5 class="card-title mb-0">Product Add Form </h5>
                                <a href="{{route('product.index')}}" class="btn btn-primary">All Product</a>
                            </div>
                            <div class="card-body">
                                <p class="text-primary text-center">{{session('message')}}</p>
                                <form class="form-horizontal" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Category Name</label>
                                        <div class="col-md-9">
                                            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" onchange="getSubCategory(this.value)">
                                                <option value=""> -- Select Category -- </option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}"> {{$category->name}} </option>
                                                @endforeach
                                            </select>
                                            @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">SubCategory Name</label>
                                        <div class="col-md-9">
                                            <select class="form-control @error('sub_category_id') is-invalid @enderror" name="sub_category_id" id="subCategoryId">
                                                <option value=""> -- Select SubCategory -- </option>
                                                @foreach($subCategories as $subCategory)
                                                    <option value="{{$subCategory->id}}"> {{$subCategory->name}} </option>
                                                @endforeach
                                            </select>
                                            @error('sub_category_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Brand Name</label>
                                        <div class="col-md-9">
                                            <select class="form-control @error('brand_id') is-invalid @enderror" name="brand_id">
                                                <option value=""> -- Select Brand -- </option>
                                                @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}"> {{$brand->name}} </option>
                                                @endforeach
                                            </select>
                                            @error('brand_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Unit Name</label>
                                        <div class="col-md-9">
                                            <select class="form-control @error('unit_id') is-invalid @enderror" name="unit_id">
                                                <option value=""> -- Select Unit -- </option>
                                                @foreach($units as $unit)
                                                    <option value="{{$unit->id}}"> {{$unit->name}} </option>
                                                @endforeach
                                            </select>
                                            @error('unit_id') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Product Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Product Name" type="text">
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Product Code</label>
                                        <div class="col-md-9">
                                            <input class="form-control @error('code') is-invalid @enderror" name="code" placeholder="Enter Product code" type="text">
                                            @error('code') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Product Color</label>
                                        <div class="col-md-9">
                                            <select required multiple="multiple" name="color[]" id="multiselect-header">
                                                @foreach($colors as $color)
                                                    <option value="{{$color->id}}">{{$color->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Product Size</label>
                                        <div class="col-md-9">
                                            <select required multiple="multiple" name="size[]" id="multiselect-basic">
                                                @foreach($sizes as $size)
                                                    <option value="{{$size->id}}">{{$size->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Meta Title</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="meta_title" placeholder="Enter Meta Title" type="text"></textarea>
                                            @error('meta_title') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Meta Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="meta_description" placeholder="Enter Meta Description"></textarea>
                                            @error('meta_description') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Product Price</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input class="form-control @error('regular_price') is-invalid @enderror" name="regular_price" placeholder="Enter Product Regular price" type="number">
                                                @error('regular_price') <span class="text-danger">{{ $message }}</span> @enderror
                                                <input class="form-control @error('selling_price') is-invalid @enderror" name="selling_price" placeholder="Enter Product Selling price" type="number">
                                                @error('selling_price') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Stock Amount</label>
                                        <div class="col-md-9">
                                            <input class="form-control @error('stock_amount') is-invalid @enderror" name="stock_amount" placeholder="Enter Product Stock Amount" type="number">
                                            @error('stock_amount') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Short Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="short_description"></textarea>
                                            @error('short_description') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Long Description</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control ckeditor-classic" name="long_description"></textarea>
                                            @error('long_description') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Image</label>
                                        <div class="col-md-9">
                                            <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" accept="image/*">
                                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label  class="col-md-3 form-label">Other Image</label>
                                        <div class="col-md-9">
                                            <input class="form-control" name="other_image[]" multiple type="file" accept="image/*">
                                            @error('other_image') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Create New Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </div>
@endsection

