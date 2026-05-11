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
                <a href="blog.html" class="d-lg-show">Blog</a>
                <a href="contact-us.html" class="d-lg-show">Contact Us</a>

                @if(Session::get('customerId'))
                    <a href="{{route('customer.dashboard')}}" class="d-lg-show">My Dashboard</a>
                    <a href="{{route('customer.logout')}}"><i class="w-icon-account"></i>Sign Out</a>
                    <span class="delimiter d-lg-show">/</span>
                    <a href="">Hello {{ Session::get('customerName') }}</a>
                @else
                    <a href="{{route('customer.login')}}" class=""><i class="w-icon-account"></i>Sign In</a>
                    <span class="delimiter d-lg-show">/</span>
                    <a href="{{route('customer.register')}}" class="">Register</a>
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
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"> {{$category->name}} </option>
                            @endforeach
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
                    <a href="#" class="cart-toggle label-down link">
                        <i class="w-icon-cart">
                            <span class="cart-count">Cart</span>
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
                                        <a href="{{ route('shop', ['id' => $category->id]) }}">
                                            {{ $category->name }}
                                        </a>

                                        @if($category->subCategory && $category->subCategory->isNotEmpty())
                                            <ul class="inner-sub-category">
                                                @foreach($category->subCategory as $subCategory)
                                                    <li>
                                                        <a href="{{ route('sub-category-shop', ['id' => $subCategory->id]) }}">
                                                            {{ $subCategory->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <nav class="main-nav">
                        <ul class="menu active-underline">
                            <li class="active">
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <a href="">Shop</a>

                                <!-- Start of Megamenu -->
                                <ul class="megamenu">

                                    <li>
                                        <h4 class="menu-title">Product Pages</h4>
                                        <ul>
                                            <li><a href="product-variable.html">Variable Product</a></li>
                                            <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                            <li><a href="product-extended.html">Extended Info</a></li>
                                        </ul>
                                    </li>

                                </ul>
                                <!-- End of Megamenu -->
                            </li>

                            <li>
                                <a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Classic</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="about-us.html">Pages</a>
                                <ul>

                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements.html">Elements</a>
                                <ul>
                                    <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                    <li><a href="element-cta.html">Call to Action</a></li>
                                    <li><a href="element-instagrams.html">Instagrams</a></li>
                                    <li><a href="element-categories.html">Product Category</a></li>
                                    <li><a href="element-products.html">Products</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

