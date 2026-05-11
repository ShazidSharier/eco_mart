@extends('website.master')
@section('body')
    <div class="main">
        <div class="container">
            <div class="intro-wrapper mb-4">
                <div class="swiper-container swiper-theme nav-inner swiper-nav-md animation-slider" data-swiper-options="{
                        'autoplay': {
                            'delay': 8000,
                            'disableOnInteraction': false
                        }
                    }">
                    <div class="swiper-wrapper row cols-1 gutter-no">
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide1 br-sm" style="background-image: url({{asset('/')}}website/assets/images/demos/demo3/slides/w1.jfif);
                            background-color: #262729;">
                            <div class="banner-content y-50 x-50 w-100 text-center">
                                <h5 class="banner-subtitle text-primary font-weight-normal text-capitalize font-secondary ls-25 slide-animate"
                                    data-animation-options="{'name': 'fadeInDownShorter', 'duration': '.8s'}">Mega Sale
                                </h5>
                                <h3 class="banner-title text-white text-capitalize ls-25 lh-1 slide-animate"
                                    data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.5s'}">
                                    2021 Women's Lifestyle</h3>
                                <p class="ls-25 slide-animate" data-animation-options="{
                                        'name': 'fadeInLeftShorter', 'duration': '.5s', 'delay': '.5s'
                                    }">Get Free Shipping on all orders over $99.00</p>

                            </div>
                        </div>
                        <!-- End Of Intro Slide 1 -->
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide2  br-sm" style="background-image: url({{asset('/')}}website/assets/images/demos/demo3/slides/w2.jfif);
                            background-color: #DCE0DF;">
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle text-primary font-secondary font-weight-normal text-capitalize mb-0 lh-1 ls-25 slide-animate"
                                    data-animation-options="{'name': 'fadeInDownShorter', 'duration': '.8s'}">Best
                                    Seller</h5>
                                <h3 class="banner-title text-capitalize lh-.8 slide-animate"
                                    data-animation-options="{'name': 'fadeInDownShorter', 'duration': '.8s', 'delay': '.4s'}">
                                    Kitchen Electronic</h3>
                                <p class="text-default font-weight-normal ls-25 slide-animate" data-animation-options="{
                                        'name': 'fadeInDownShorter', 'duration': '.8s', 'delay': '.6s'
                                    }">Get Free Shipping on all orders over <strong class="text-primary">$99.00</strong>
                                </p>

                            </div>
                        </div>
                        <!-- End of Intro Slide 3 -->
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide3 br-sm" style="background-image: url({{asset('/')}}website/assets/images/demos/demo3/slides/w3.jfif);
                            background-color: #696A6E;">
                            <div class="banner-content y-50 text-right">
                                <div class="slide-animate" data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '.7s'
                                    }">
                                    <h5
                                        class="banner-subtitle text-primary font-secondary font-weight-normal ls-25 mb-0 lh-1">
                                        New Arrivals</h5>
                                    <h3 class="banner-title text-white text-capitalize lh-1">Sports Sneakers</h3>
                                    <p class="text-white ls-25">Get Free Shipping on all orders over
                                        <strong>$99.00</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="swiper-button-next"></button>
                    <button class="swiper-button-prev"></button>
                </div>
            </div>
            <!-- End of Intro Wrapper -->
            <div class="swiper-container swiper-theme intro-banner appear-animate" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2,
                            'spaceBetween': 15
                        },
                        '992': {
                            'slidesPerView': 3
                        }
                    }
                }">
                <div class="swiper-wrapper row cols-lg-3 cols-sm-2 cols-1">
                    <div class="swiper-slide">
                        <figure class="banner banner-fixed br-sm">
                            <img src="{{asset('/')}}website/assets/images/demos/demo3/slides/w3.jfif" alt="Category Banner" width="400"
                                 height="200" style="background-color: #3C3C3C;" />
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle text-primary text-uppercase font-weight-bold ls-25">Top Products
                                </h5>
                                <h3 class="banner-title text-white font-weight-bold">Tranding <br>Skin Care</h3>

                            </div>
                        </figure>
                    </div>

                    <div class="swiper-slide">
                        <figure class="banner banner-fixed br-sm">
                            <img src="{{asset('/')}}website/assets/images/demos/demo3/categories/2.jpg" alt="Category Banner" width="400"
                                 height="200" style="background-color: #E1E1E1;" />
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle text-primary text-uppercase font-weight-bold ls-25">New Arrivals
                                </h5>
                                <h3 class="banner-title ls-25">Vegan Friendly<br>Makeup</h3>

                            </div>
                        </figure>
                    </div>

                    <div class="swiper-slide">
                        <figure class="banner banner-fixed br-sm">
                            <img src="{{asset('/')}}website/assets/images/demos/demo3/slides/w2.jfif" alt="Category Banner" width="400"
                                 height="200" style="background-color: #57585D;" />
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle text-primary text-uppercase font-weight-bold ls-25">Best Seller
                                </h5>
                                <h3 class="banner-title text-white font-weight-bold ls-15">Fashion<br>Accessories</h3>

                            </div>
                        </figure>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm mt-6 mb-10" data-swiper-options="{
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
                <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                    <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-shipping">
                                <i class="w-icon-truck"></i>
                            </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title mb-1 ls-normal">Free Shipping & Returns</h4>
                            <p class="text-default">For all orders over $99</p>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-payment">
                                <i class="w-icon-bag"></i>
                            </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title mb-1 ls-normal">Secure Payment</h4>
                            <p class="text-default">We ensure secure payment</p>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                            <span class="icon-box-icon icon-money">
                                <i class="w-icon-money"></i>
                            </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title mb-1 ls-normal">Money Back Guarantee</h4>
                            <p class="text-default">Any back within 30 days</p>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                            <span class="icon-box-icon icon-chat">
                                <i class="w-icon-chat"></i>
                            </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title mb-1 ls-normal">Customer Support</h4>
                            <p class="text-default">Call or email us 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Iocn Box Wrapper -->
            <h2 class="title text-left pt-1 mb-5 appear-animate">Most Popular Brand</h2>
            <div class="swiper">
                <div class="swiper-container category-wrapper swiper-theme appear-animate" data-swiper-options="{
            'spaceBetween': 20,
            'slidesPerView': 2,
            'breakpoints': {
                '576': { 'slidesPerView': 3 },
                '768': { 'slidesPerView': 4 },
                '992': { 'slidesPerView': 5 },
                '1200': { 'slidesPerView': 6 }
            }
        }">
                    <div class="swiper-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">

                        @foreach($brands as $brand)
                            <div class="swiper-slide category category-ellipse">
                                <figure class="category-media">
                                    <a href="{{ route('brand-shop', ['id' => $brand->id]) }}">
                                        <img src="{{ asset($brand->image) }}"
                                             alt="{{ $brand->name }}"
                                             style="width: 190px !important; height: 190px !important; object-fit: cover; border-radius: 50%;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="{{ route('brand-shop', ['id' => $brand->id]) }}">{{ $brand->name }}</a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- End of Category Wrapper -->


            <h2 class="title text-left appear-animate mb-5">Trending Products</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner banner-fixed br-sm appear-animate">
                        <figure>
                            <img src="{{asset('/')}}website/assets/images/demos/demo3/slides/w5.png" alt="banner" width="925" height="298"
                                 style="background-color: #ECEDE8;" />
                        </figure>
                        <div class="banner-content y-50">
                            <h5 class="banner-subtitle text-primary font-weight-bold text-uppercase ls-25">Season Lifestyle</h5>
                            <h3 class="banner-title font-weight-bold text-uppercase ls-25">
                                Wonderful Long Weekend<br><strong class="text-capitalize">Women's Style</strong>
                            </h3>
                            <a href="" class="btn btn-dark btn-outline btn-rounded">Shop Now</a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-2">
                            @foreach($products as $product)
                            <div class="swiper-slide product-wrap">
                                <div class="product product-simple text-center">
                                    <figure class="product-media">
                                        <a href="{{route('product.details',['id' => $product->id,'slug'=> $product->slug])}}">
                                            <img src="{{asset($product->image)}}" alt="Product" style="height: 200px;width: 250px" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Add to Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="{{route('product.details',['id' => $product->id,'slug'=> $product->slug])}}" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <span class="category">{{$product->category->name}}</span>
                                        <h4 class="product-name"><a href="{{route('product.details',['id' => $product->id,'slug'=> $product->slug])}}">{{$product->name}}</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">TK. {{$product->selling_price}}</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="" class="btn-cart btn-product btn btn-icon-right btn-link btn-underline">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <!-- Banner Product Wrapper -->
        </div>
        <!-- End of Container -->

        <section class="grey-section">
            <div class="container">
                <h2 class="title text-left mb-5 appear-animate">Our Clients</h2>
                <div class="swiper-container swiper-theme brands-wrapper mb-10 bg-white appear-animate" data-swiper-options="{
                        'slidesPerView': 1,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 4
                            },
                            '992': {
                                'slidesPerView': 5
                            }
                        }
                    }">
                    <div class="swiper-wrapper row gutter-no cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="{{asset('/')}}website/assets/images/demos/demo3/brand/1.png" alt="Brand" width="247" height="94" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="{{asset('/')}}website/assets/images/demos/demo3/brand/2.png" alt="Brand" width="247" height="94" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="{{asset('/')}}website/assets/images/demos/demo3/brand/3.png" alt="Brand" width="247" height="94" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="{{asset('/')}}website/assets/images/demos/demo3/brand/4.png" alt="Brand" width="247" height="94" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="{{asset('/')}}website/assets/images/demos/demo3/brand/5.png" alt="Brand" width="247" height="94" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="{{asset('/')}}website/assets/images/demos/demo3/brand/6.png" alt="Brand" width="247" height="94" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="{{asset('/')}}website/assets/images/demos/demo3/brand/7.png" alt="Brand" width="247" height="94" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="{{asset('/')}}website/assets/images/demos/demo3/brand/8.png" alt="Brand" width="247" height="94" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="{{asset('/')}}website/assets/images/demos/demo3/brand/9.png" alt="Brand" width="247" height="94" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="{{asset('/')}}website/assets/images/demos/demo3/brand/10.png" alt="Brand" width="247" height="94" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
