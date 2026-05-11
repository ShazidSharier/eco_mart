<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/demo3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 21:00:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Ecommerce</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('/')}}website/assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,600,500,700,800', 'Zeyada: 400'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = '{{asset('/')}}website/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="{{asset('/')}}website/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="{{asset('/')}}website/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="{{asset('/')}}website/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
          crossorigin="anonymous">
    <link rel="preload" href="{{asset('/')}}website/assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/vendor/fontawesome-free/css/all.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}website/assets/css/style.min.css">
</head>

<body class="home">
<div class="page-wrapper">
    <!-- Start of Header -->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <p class="welcome-msg">Welcome to Wolmart Store.</p>
                </div>
                <div class="header-right">
                    <div class="dropdown">
                        <a href="#currency">USD</a>
                        <div class="dropdown-box">
                            <a href="#USD">USD</a>
                            <a href="#EUR">EUR</a>
                        </div>
                    </div>
                    <!-- End of DropDown Menu -->

                    <div class="dropdown">
                        <a href="#language"><img src="{{asset('/')}}website/assets/images/flags/eng.png" alt="ENG Flag" width="14"
                                                 height="8" class="dropdown-image" /> ENG</a>
                        <div class="dropdown-box">
                            <a href="#ENG">
                                <img src="{{asset('/')}}website/assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8"
                                     class="dropdown-image" />
                                ENG
                            </a>
                            <a href="#FRA">
                                <img src="{{asset('/')}}website/assets/images/flags/fra.png" alt="FRA Flag" width="14" height="8"
                                     class="dropdown-image" />
                                FRA
                            </a>
                        </div>
                    </div>
                    <!-- End of Dropdown Menu -->
                    <span class="divider d-lg-show"></span>
                    <a href="" class="d-lg-show">Blog</a>
                    <a href="" class="d-lg-show">Contact Us</a>
                    <a href="" class="d-lg-show">My Account</a>

                    @if(Session::get('customerId'))
                        <a href="{{route('customer.logout')}}"><i class="w-icon-account"></i>Sign Out</a>
                        <span class="delimiter d-lg-show">/</span>
                        <a href="">{{ Session::get('customerName') }}</a>
                    @else
                        <a href="{{route('customer.login')}}" class="d-lg-show login sign-in"><i class="w-icon-account"></i>Sign In</a>
                        <span class="delimiter d-lg-show">/</span>
                        <a href="{{route('customer.register')}}" class="ml-0 d-lg-show login register">Register</a>
                    @endif

                </div>
            </div>
        </div>
        <!-- End of Header Top -->

        <div class="header-middle">
            <div class="container">
                <div class="header-left mr-md-4">
                    <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                    </a>
                    <a href="{{route('home')}}" class="logo ml-lg-0">
                        <img src="{{asset('/')}}website/assets/images/demos/demo3/logo.png" alt="logo" width="144" height="45" />
                    </a>
                    <form method="get" action="#" class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                        <div class="select-box">
                            <select id="category" name="category" class="pb-0">
                                <option value="">All Categories</option>
                                <option value="4">Fashion</option>
                            </select>
                        </div>
                        <input type="text" class="form-control" name="search" id="search"
                               placeholder="Search in..." required />
                        <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                        </button>
                    </form>
                </div>
                <div class="header-right ml-4">
                    <div class="header-call d-xs-show d-lg-flex align-items-center">
                        <a href="tel:#" class="w-icon-call"></a>
                        <div class="call-info d-lg-show">
                            <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                <a href="https://portotheme.com/cdn-cgi/l/email-protection#6241" class="text-capitalize">Call Us Now</a> :</h4>
                            <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                        </div>
                    </div>
                    <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                        <div class="cart-overlay"></div>
                        <a href="{{ route('cart') }}" class="cart-toggle label-down link">
                            <i class="w-icon-cart">
                                <span class="cart-count">{{ session('cart') ? count(session('cart')) : 0 }}</span>
                            </i>
                            <span class="cart-label">Cart</span>
                        </a>
                        <div class="dropdown-box">
                            <div class="cart-header">
                                <span>Shopping Cart</span>
                                <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                            </div>

                            @php($sum=0)
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $item)
                                    <div class="products">
                                        <div class="product product-cart">
                                            <div class="product-detail">
                                                <a href="" class="product-name">{{ $item['name'] }}<br></a>
                                                <div class="price-box">
                                                    <span class="product-quantity">{{ $item['quantity'] }}</span>
                                                    <span class="product-price">{{ $item['price'] }}</span>
                                                </div>
                                            </div>
                                            <figure class="product-media">
                                                <a href="">

                                                    <img src="{{ asset($item['image']) }}" alt="product" height="84" width="94" />
                                                </a>
                                            </figure>


                                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class="btn btn-link btn-close"><i class="fas fa-times"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    @php($sum = $sum + ($item['price'] * $item['quantity']))
                                @endforeach
                            @endif

                            <div class="cart-total">
                                <label>Total:</label>
                                <span class="price">Tk. {{$sum}}</span>
                            </div>

                            <div class="cart-action">
                                <a href="{{route('cart')}}" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                <a href="" class="btn btn-primary  btn-rounded">Checkout</a>
                            </div>
                        </div>
                        <!-- End of Dropdown Box -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Header Middle -->

        <div class="header-bottom sticky-content fix-top sticky-header">
            <div class="container">
                <div class="inner-wrap">
                    <div class="header-left">
                        <div class="dropdown category-dropdown has-border" data-visible="true">
                            <a href="#" class="text-white category-toggle" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="true" data-display="static"
                               title="Browse Categories">
                                <i class="w-icon-category"></i>
                                <span>All Categories</span>
                            </a>

                            <div class="dropdown-box">
                                <ul class="menu vertical-menu category-menu">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="{{route('shop',['id' => $category->id])}}">{{$category->name}}
                                                @if(count($category->subCategory) > 0)
                                                @endif
                                            </a>

                                            @if(count($category->subCategory) > 0)
                                                <ul class="inner-sub-category">
                                                    @foreach($category->subCategory as $subCategory)
                                                        <li><a href="{{route('sub-category-shop', ['id' => $subCategory->id])}}">{{$subCategory->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End of Header -->
    <!-- Start of Main -->
    <main class="main cart">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb shop-breadcrumb bb-no">
                    <li class="active"><a href="{{route('cart')}}">Shopping Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="order.html">Complete Order</a></li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of PageContent -->
        <div class="page-content">
            <div class="container">
                <div class="row gutter-lg mb-10">
                    <div class="col-lg-8 pr-lg-4 mb-6">
                        <table class="shop-table cart-table">
                            <thead>
                            <h4 class="text-center text-primary">{{Session('message')}}</h4>
                            <tr>
                                <th class="product-name"><span class="text-dark font-weight-bold">Product</span></th>
                                <th class="product-name"><span class="text-dark font-weight-bold">Name</span></th>
                                <th class="product-price"><span>Price</span></th>
                                <th class="product-quantity"><span>Quantity</span></th>
                                <th class="product-subtotal"><span>Subtotal</span></th>
                            </tr>
                            </thead>
                            @php($sum=0)
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $product)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <div class="product-image-container" style="position: relative; display: inline-block;">
                                                <img src="{{ asset($product['image']) }}" alt="product" width="100" style="display: block;">

                                                <form action="{{ route('cart.remove', $id) }}" method="post" style="position: absolute; top: 0; right: 0;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-close" style="background: rgba(255,255,255,0.7); border-radius: 50%; padding: 2px 5px;">
                                                        <i class="fas fa-times" style="color: red;"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="product-details">
                                            <span class="name">{{ $product['name'] }}</span>
                                        </td>
                                        <td class="product-price">TK. {{ $product['price'] }}</td>
                                        <td class="product-quantity">
                                            <form action="{{ route('cart.update', $id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                                <div class="input-group">
                                                    <input type="number" name="qty" value="{{ $product['quantity'] }}" min="1" class="form-control">
                                                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="product-subtotal">TK. {{ $product['price'] * $product['quantity'] }}</td>
                                    </tr>
                                    @php($sum += ($product['price'] * $product['quantity']))
                                @endforeach
                            @endif

                        </table>
                    </div>
                    <div class="col-lg-4 sticky-sidebar-wrapper">
                        <div class="sticky-sidebar">
                            <div class="cart-summary mb-4">
                                <h3 class="cart-title text-uppercase">Cart Totals</h3>
                                <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                    <label class="ls-25 text-dark font-weight-bold">Subtotal</label>
                                    <span>{{ round($sum) }}</span>
                                </div>

                                <hr class="divider">
                                <div class="order-total d-flex justify-content-between align-items-center">
                                    <label class="text-dark font-weight-bold">Tax(2%)</label>
                                    <span class="ls-50">{{ $tax = round( ($sum * 0.02) ) }}</span>
                                </div>
                                <div class="order-total d-flex justify-content-between align-items-center">
                                    <label class="text-dark font-weight-bold">Shipping</label>
                                    <span class="ls-50">{{ $shipping = 100 }}</span>
                                </div>

                                <hr class="divider mb-6">
                                <div class="order-total d-flex justify-content-between align-items-center">
                                    <label class="text-dark font-weight-bold">Total</label>
                                    <span class="ls-50">{{  $grandTotal = $sum + $tax + $shipping }}</span>
                                </div>
                                <a href="{{route('checkout')}}" class="btn btn-block btn-primary btn-icon-right btn-rounded  btn-checkout">Proceed to checkout<i class="w-icon-long-arrow-right"></i></a>
                                <a href="{{route('home')}}" class="btn btn-block btn-dark btn-icon-left btn-shopping btn-rounded"><i class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of PageContent -->
    </main>
    <!-- End of Main -->
    <!-- Start of Footer -->
    <footer class="footer footer-dark appear-animate">
        <div class="container">
            <div class="footer-bottom">
                <div class="footer-left">
                    <p class="copyright">2026 EcoMart Store. All Rights Reserved.</p>
                </div>
                <div class="footer-right">
                    <span class="payment-label mr-lg-8">We're using safe payment for</span>
                    <figure class="payment">
                        <img src="{{asset('/')}}website/assets/images/payment.png" alt="payment" width="159" height="25" />
                    </figure>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
</div>

<!-- Start of Scroll Top -->
<a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70"> <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle> </svg> </a>
<!-- End of Scroll Top -->
<!-- Start of Mobile Menu -->
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-overlay"></div>
    <!-- End of .mobile-menu-overlay -->

    <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
    <!-- End of .mobile-menu-close -->

    <div class="mobile-menu-container scrollable">
        <form action="#" method="get" class="input-wrapper">
            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                   required />
            <button class="btn btn-search" type="submit">
                <i class="w-icon-search"></i>
            </button>
        </form>
        <!-- End of Search Form -->
        <div class="tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a href="#main-menu" class="nav-link active">Main Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#categories" class="nav-link">Categories</a>
                </li>
            </ul>
        </div>

    </div>
</div>
<!-- End of Mobile Menu -->

<!-- Start of Newsletter popup -->

<div class="newsletter-popup mfp-hide">
    <div class="newsletter-content">
        <h4 class="text-uppercase font-weight-normal ls-25">Get Up to<span class="text-primary">25% Off</span></h4>
        <h2 class="ls-25">Sign up to EcoMart</h2>
        <p class="text-light ls-10">Subscribe to the EcoMart market newsletter to
            receive updates on special offers.</p>
        <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
            <input type="email" class="form-control email font-size-md" name="email" id="email2"
                   placeholder="Your email address" required="">
            <button class="btn btn-dark" type="submit">SUBMIT</button>
        </form>
        <div class="form-checkbox d-flex align-items-center">
            <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                   required="">
            <label for="hide-newsletter-popup" class="font-size-sm text-light">Don't show this popup again.</label>
        </div>
    </div>
</div>

<!-- End of Newsletter popup -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('/')}}website/assets/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}website/assets/vendor/sticky/sticky.js"></script>
<script src="{{asset('/')}}website/assets/vendor/parallax/parallax.min.js"></script>
<script src="{{asset('/')}}website/assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
<script src="{{asset('/')}}website/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('/')}}website/assets/vendor/zoom/jquery.zoom.js"></script>
<script src="{{asset('/')}}website/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('/')}}website/assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
<script src="{{asset('/')}}website/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Main Js -->
<script src="{{asset('/')}}website/assets/js/main.min.js"></script>
</body>
</html>

