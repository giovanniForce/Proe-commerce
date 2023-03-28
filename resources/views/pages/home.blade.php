@extends('layouts.default')
@section('content')
   




       
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="icon_close"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{ URL::asset('assets/images/cart/cart-1.jpg') }}" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Simple Black T-Shirt</a></h4>
                                <span> 1 × $49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="{{ URL::asset('assets/images/cart/cart-2.jpg') }}" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Norda Backpack</a></h4>
                                <span> 1 × $49.00	</span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                    </ul>
                    <div class="cart-total">
                        <h4>Subtotal: <span>$170.00</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile header start -->
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close"><i class="icon_close"></i></a>
                <div class="mobile-header-content-area">
                    <div class="header-offer-wrap-2 mrg-none mobile-header-padding-border-4">
                        <p><span>FREE SHIPPING</span> world wide for all orders over $199</p>
                    </div>
                    <div class="mobile-search mobile-header-padding-border-1">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search here…">
                            <button class="button-search"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-padding-border-2">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="index.html">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home version 1 </a></li>
                                        <li><a href="index-2.html">Home version 2</a></li>
                                        <li><a href="index-3.html">Home version 3</a></li>
                                        <li><a href="index-4.html">Home version 4</a></li>
                                        <li><a href="index-5.html">Home version 5</a></li>
                                        <li><a href="index-6.html">Home version 6</a></li>
                                        <li><a href="index-7.html">Home version 7</a></li>
                                        <li><a href="index-8.html">Home version 8</a></li>
                                        <li><a href="index-9.html">Home version 9</a></li>
                                        <li><a href="index-10.html">Home version 10</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">shop</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children"><a href="#">shop layout</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">standard style</a></li>
                                                <li><a href="shop-list.html">shop list style</a></li>
                                                <li><a href="shop-fullwide.html">shop fullwide</a></li>
                                                <li><a href="shop-no-sidebar.html">grid no sidebar</a></li>
                                                <li><a href="shop-list-no-sidebar.html">list no sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                                <li><a href="store-location.html">store location</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Products Layout</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">tab style 1</a></li>
                                                <li><a href="product-details-2.html">tab style 2</a></li>
                                                <li><a href="product-details-sticky.html">sticky style</a></li>
                                                <li><a href="product-details-gallery.html">gallery style </a></li>
                                                <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                                <li><a href="product-details-group.html">group style</a></li>
                                                <li><a href="product-details-fixed-img.html">fixed image style </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="about-us.html">about us </a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout </a></li>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="wishlist.html">wishlist </a></li>
                                        <li><a href="compare.html">compare </a></li>
                                        <li><a href="contact.html">contact us </a></li>
                                        <li><a href="order-tracking.html">order tracking</a></li>
                                        <li><a href="login-register.html">login / register </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">blog standard </a></li>
                                        <li><a href="blog-no-sidebar.html">blog no sidebar </a></li>
                                        <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="main-categori-wrap mobile-menu-wrap mobile-header-padding-border-3">
                        <a class="categori-show purple" href="#">
                            <i class="lnr lnr-menu"></i> All Department <i class="icon-arrow-down icon-right"></i>
                        </a>
                        <div class="categori-hide-2">
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children "><a href="#">Clothing </a>
                                        <ul class="dropdown">
                                            <li class="menu-item-has-children"><a href="#">Men Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Sleeveless shirt</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt</a></li>
                                                    <li><a href="shop.html">Trench coat</a></li>
                                                    <li><a href="shop.html">Cargo pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Women Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Wedding dress</a></li>
                                                    <li><a href="shop.html">Gym clothes</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt </a></li>
                                                    <li><a href="shop.html">Long coat</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Kids Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="product-details.html">Winter Wear </a></li>
                                                    <li><a href="product-details-2.html">Occasion Gowns</a></li>
                                                    <li><a href="product-details-tab1.html">Birthday Tailcoat</a></li>
                                                    <li><a href="product-details-tab2.html">Stylish Unicorn</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">Women</a>
                                        <ul class="dropdown">
                                            <li class="menu-item-has-children"><a href="#">Men Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Sleeveless shirt</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt</a></li>
                                                    <li><a href="shop.html">Trench coat</a></li>
                                                    <li><a href="shop.html">Cargo pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Women Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Wedding dress</a></li>
                                                    <li><a href="shop.html">Gym clothes</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt </a></li>
                                                    <li><a href="shop.html">Long coat</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">Men </a>
                                        <ul class="dropdown">
                                            <li class="menu-item-has-children"><a href="#">Men Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Sleeveless shirt</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt</a></li>
                                                    <li><a href="shop.html">Trench coat</a></li>
                                                    <li><a href="shop.html">Cargo pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Women Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Wedding dress</a></li>
                                                    <li><a href="shop.html">Gym clothes</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt </a></li>
                                                    <li><a href="shop.html">Long coat</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Kids Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="product-details.html">Winter Wear </a></li>
                                                    <li><a href="product-details-2.html">Occasion Gowns</a></li>
                                                    <li><a href="product-details-tab1.html">Birthday Tailcoat</a></li>
                                                    <li><a href="product-details-tab2.html">Stylish Unicorn</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">Baby Girl </a>
                                        <ul class="dropdown">
                                            <li class="menu-item-has-children"><a href="#">Men Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Sleeveless shirt</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt</a></li>
                                                    <li><a href="shop.html">Trench coat</a></li>
                                                    <li><a href="shop.html">Cargo pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Women Clothing</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Wedding dress</a></li>
                                                    <li><a href="shop.html">Gym clothes</a></li>
                                                    <li><a href="shop.html">Cotton T-shirt </a></li>
                                                    <li><a href="shop.html">Long coat</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Baby Boy </a></li>
                                    <li><a href="shop.html">Accessories </a></li>
                                    <li><a href="shop.html">Shoes </a></li>
                                    <li><a href="shop.html">Shirt </a></li>
                                    <li><a href="shop.html">T-Shirt </a></li>
                                    <li><a href="shop.html">Coat </a></li>
                                    <li><a href="shop.html">Jeans </a></li>
                                    <li><a href="shop.html">Collection </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="mobile-header-info-wrap mobile-header-padding-border-3">
                        <div class="single-mobile-header-info">
                            <a href="store-location.html"><i class="lastudioicon-pin-3-2"></i> Store Location </a>
                        </div>
                        <div class="single-mobile-header-info">
                            <a class="mobile-language-active" href="#">Language <span><i class="icon-arrow-down"></i></span></a>
                            <div class="lang-curr-dropdown lang-dropdown-active">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-mobile-header-info">
                            <a class="mobile-currency-active" href="#">Currency <span><i class="icon-arrow-down"></i></span></a>
                            <div class="lang-curr-dropdown curr-dropdown-active">
                                <ul>
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">Real</a></li>
                                    <li><a href="#">BDT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-contact-info mobile-header-padding-border-4">
                        <ul>
                            <li><i class="icon-phone "></i> (+612) 2531 5600</li>
                            <li><i class="icon-envelope-open "></i> norda@domain.com</li>
                            <li><i class="icon-home"></i> PO Box 1622 Colins Street West Australia</li>
                        </ul>
                    </div>
                    <div class="mobile-social-icon">
                        <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                        <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                        <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="slider-area bg-gray mb-30">
                            <div class="hero-slider-active-3 dot-style-2 dot-style-2-position-4 dot-style-2-active-purple">
                                <div class="single-hero-slider single-animation-wrap">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="hero-slider-content-1 slider-animated-1 hero-slider-content-1-padding1">
                                                <h4 class="animated font-dec">New Arrivals</h4>
                                                <h1 class="animated font-dec">Leather Simple <br>Backpacks</h1>
                                                <p class="animated width-inc">Discover our collection with leather simple backpacks. Less is more never out trend.</p>
                                                <div class="btn-style-1">
                                                    <a class="animated btn-1-padding-1 btn-1-bg-purple" href="product-details.html">Explore Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="hm6-hero-slider-img slider-animated-1">
                                                <img class="animated" src="{{ URL::asset('assets/images/slider/hm-1-slider-1.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-hero-slider single-animation-wrap">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="hero-slider-content-1 slider-animated-1 hero-slider-content-1-padding1">
                                                <h4 class="animated font-dec">New Arrivals</h4>
                                                <h1 class="animated font-dec">Leather Simple <br>Backpacks</h1>
                                                <p class="animated width-inc">Discover our collection with leather simple backpacks. Less is more never out trend.</p>
                                                <div class="btn-style-1">
                                                    <a class="animated btn-1-padding-1 btn-1-bg-purple" href="product-details.html">Explore Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="hm6-hero-slider-img slider-animated-1">
                                                <img class="animated" src="{{ URL::asset('assets/images/slider/hm-1-slider-1.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="banner-wrap mb-30">
                                    <div class="banner-img banner-img-zoom">
                                        <a href="product-details.html"><img src="{{ URL::asset('assets/images/banner/banner-14.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="banner-content-13">
                                        <span>20x absorbs</span>
                                        <h2>Triple <br>guards</h2>
                                        <div class="product-available-wrap">
                                            <div class="single-product-available">
                                                <h3>6</h3>
                                                <span>pack</span>
                                            </div>
                                            <div class="single-product-available">
                                                <h3>124</h3>
                                                <span>diapers</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="banner-wrap mb-30">
                                    <div class="banner-img banner-img-zoom">
                                        <a href="product-details.html"><img src="{{ URL::asset('assets/images/banner/banner-15.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="banner-content-14">
                                        <span>ZHnio</span>
                                        <h2>head <br>phone</h2>
                                        <p>new version 3.0 for new era</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-area pb-115">
            <div class="container">
                <div class="service-wrap-border service-wrap-padding-3">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                            <div class="single-service-wrap-2 mb-30">
                                <div class="service-icon-2 icon-purple">
                                    <i class="icon-cursor"></i>
                                </div>
                                <div class="service-content-2">
                                    <h3>Free Shipping</h3>
                                    <p>Oders over $99</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1 service-border-1-none-md">
                            <div class="single-service-wrap-2 mb-30">
                                <div class="service-icon-2 icon-purple">
                                    <i class="icon-refresh "></i>
                                </div>
                                <div class="service-content-2">
                                    <h3>90 Days Return</h3>
                                    <p>For any problems</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                            <div class="single-service-wrap-2 mb-30">
                                <div class="service-icon-2 icon-purple">
                                    <i class="icon-credit-card "></i>
                                </div>
                                <div class="service-content-2">
                                    <h3>Secure Payment</h3>
                                    <p>100% Guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-service-wrap-2 mb-30">
                                <div class="service-icon-2 icon-purple">
                                    <i class="icon-earphones "></i>
                                </div>
                                <div class="service-content-2">
                                    <h3>24h Support</h3>
                                    <p>Dedicated support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-110">
            <div class="container">
                <div class="section-title-btn-wrap border-bottom-3 mb-50 pb-20">
                    <div class="section-title-deal-wrap">
                        <div class="section-title-3">
                            <h2>Flash Deal</h2>
                        </div>
                        <div class="timer-wrap-2">
                            <h4><i class="icon-speedometer"></i> Expires in:</h4>
                            <div class="timer-style-2" id="timer-2-active"></div>
                        </div>
                    </div>
                    <div class="btn-style-7">
                        <a href="shop.html">All Product</a>
                    </div>
                </div>
                <div class="product-slider-active-3 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="{{ URL::asset('assets/images/product/product-41.jpg') }}" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-40%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a class="purple" href="shop.html">baby</a>
                                </div>
                                <h3><a class="purple" href="product-details.html">Advantage Baby Milk</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a class="purple" href="shop.html">baby</a>
                                </div>
                                <h3><a class="purple" href="product-details.html">Advantage Baby Milk</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <span>(4)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$38.50 </span>
                                    <span class="old-price">$42.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="{{ URL::asset('assets/images/product/product-42.jpg') }}" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a class="purple" href="shop.html">fashion</a>
                                </div>
                                <h3><a class="purple" href="product-details.html">Herchoe Backpack</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a class="purple" href="shop.html">fashion</a>
                                </div>
                                <h3><a class="purple" href="product-details.html">Herchoe Backpack</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="{{ URL::asset('assets/images/product/product-43.jpg') }}" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-15%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a class="purple" href="shop.html">baby</a>
                                </div>
                                <h3><a class="purple" href="product-details.html">Pampers baby-dry diapers</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a class="purple" href="shop.html">baby</a>
                                </div>
                                <h3><a class="purple" href="product-details.html">Pampers baby-dry diapers</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(6)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$43.50 </span>
                                    <span class="old-price">$52.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="{{ URL::asset('assets/images/product/product-44.jpg') }}" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-10%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a class="purple" href="shop.html">furniture </a>
                                </div>
                                <h3><a class="purple" href="product-details.html">White Plastic Chair</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50  </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a class="purple" href="shop.html">furniture </a>
                                </div>
                                <h3><a class="purple" href="product-details.html">White Plastic Chair</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(3)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$123.50 </span>
                                    <span class="old-price">$152.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="{{ URL::asset('assets/images/product/product-45.jpg') }}" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-35%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a class="purple" href="shop.html">women</a>
                                </div>
                                <h3><a class="purple" href="product-details.html">Ciate London Makeup</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$86.75 </span>
                                    <span class="old-price">$94.52</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a class="purple" href="shop.html">beauty</a>
                                </div>
                                <h3><a class="purple" href="product-details.html">Ciate London Makeup</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star "></i>
                                    </div>
                                    <span>(1)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$86.75 </span>
                                    <span class="old-price">$94.52</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.html">
                                    <img src="{{ URL::asset('assets/images/product/product-42.jpg') }}" alt="">
                                </a>
                                <span class="pro-badge left bg-red">-20%</span>
                                <div class="product-action-2 tooltip-style-2">
                                    <button title="Wishlist"><i class="icon-heart"></i></button>
                                    <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                    <button title="Compare"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a class="purple" href="shop.html">fashion</a>
                                </div>
                                <h3><a class="purple" href="product-details.html">Herchoe Backpack</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a class="purple" href="shop.html">fashion</a>
                                </div>
                                <h3><a class="purple" href="product-details.html">Herchoe Backpack</a></h3>
                                <div class="product-rating-wrap-2">
                                    <div class="product-rating-4">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star gray"></i>
                                    </div>
                                    <span>(2)</span>
                                </div>
                                <div class="product-price-4">
                                    <span class="new-price">$26.50 </span>
                                    <span class="old-price">$45.85</span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button title="Add to Cart">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-categories-area pb-115">
            <div class="container">
                <div class="section-title-btn-wrap border-bottom-3 mb-50 pb-20">
                    <div class="section-title-3">
                        <h2>Popular Categories</h2>
                    </div>
                    <div class="btn-style-7">
                        <a href="shop.html">All Product</a>
                    </div>
                </div>
                <div class="product-categories-slider-1 nav-style-3">
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border mb-20">
                                <a href="shop.html">
                                    <img src="{{ URL::asset('assets/images/product/product-50.png') }}" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 text-center">
                                <h5><a href="shop.html">Fashion</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border mb-20">
                                <a href="shop.html">
                                    <img src="{{ URL::asset('assets/images/product/product-51.png') }}" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 text-center">
                                <h5><a href="shop.html">Electronic</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border mb-20">
                                <a href="shop.html">
                                    <img src="{{ URL::asset('assets/images/product/product-52.png') }}" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 text-center">
                                <h5><a href="shop.html">computer</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border mb-20">
                                <a href="shop.html">
                                    <img src="{{ URL::asset('assets/images/product/product-53.png') }}" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 text-center">
                                <h5><a href="shop.html">beauty</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border mb-20">
                                <a href="shop.html">
                                    <img src="{{ URL::asset('assets/images/product/product-54.png') }}" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 text-center">
                                <h5><a href="shop.html">sport</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border mb-20">
                                <a href="shop.html">
                                    <img src="{{ URL::asset('assets/images/product/product-55.png') }}" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 text-center">
                                <h5><a href="shop.html">baby</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-border mb-20">
                                <a href="shop.html">
                                    <img src="{{ URL::asset('assets/images/product/product-52.png') }}" alt="">
                                </a>
                            </div>
                            <div class="product-content-categories-2 text-center">
                                <h5><a href="shop.html">computer</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner-wrap mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="product-details.html"><img src="{{ URL::asset('assets/images/banner/banner-10.jpg') }}" alt=""></a>
                            </div>
                            <div class="banner-content-11 banner-content-11-modify">
                                <h2><span>Zara</span> Pattern Boxed <br>Underwear</h2>
                                <p>Stretch, & Fress cool</p>
                                <div class="btn-style-4">
                                    <a class="hover-red" href="product-details.html">Shop now <i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner-wrap mb-30">
                            <div class="banner-img banner-img-zoom">
                                <a href="product-details.html"><img src="{{ URL::asset('assets/images/banner/banner-11.jpg') }}" alt=""></a>
                            </div>
                            <div class="banner-content-11 banner-content-11-modify">
                                <h2><span>Basic</span> Color<br>Caps</h2>
                                <p>Less is more!</p>
                                <div class="btn-style-4">
                                    <a class="hover-red" href="product-details.html">Shop now <i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-85">
            <div class="container">
                <div class="section-title-5 section-title-5-bg-1 mb-10">
                    <i class="red icon-screen-desktop"></i>
                    <h5 class="red">Consumer electric</h5>
                </div>
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="tab-style-7 tab-hm6-categories nav">
                            <a class="active" href="#product-9" data-toggle="tab">Popular </a>
                            <a href="#product-10" data-toggle="tab"> Best Seller </a>
                            <a href="#product-11" data-toggle="tab">Sale </a>
                        </div>
                        <div class="tab-content tab-hm6-categories-slider tab-content-mrg-top jump">
                            <div id="product-9" class="tab-pane active">
                                <div class="product-slider-active-5">
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-46.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Mini Protector</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Mini Protector</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-47.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Norda Coolpix Camera</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Norda Coolpix Camera</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-48.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Norda Phone 6s 64GB</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$1,238.50 </span>
                                                    <span class="old-price">$1,542.85</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Norda Phone 6s 64GB</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$1,238.50 </span>
                                                    <span class="old-price">$1,542.85</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-49.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Norda Phone A38</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Norda Phone A38</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-47.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Norda Coolpix Camera</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Norda Coolpix Camera</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="product-10" class="tab-pane">
                                <div class="product-slider-active-5">
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-49.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Norda Phone A38</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Norda Phone A38</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-48.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Norda Phone 6s 64GB</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Norda Phone 6s 64GB</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-47.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Norda Coolpix Camera</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$1,238.50 </span>
                                                    <span class="old-price">$1,542.85</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Norda Coolpix Camera</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$1,238.50 </span>
                                                    <span class="old-price">$1,542.85</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-46.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Mini Protector</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Mini Protector</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-48.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Norda Coolpix Camera</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Norda Coolpix Camera</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="product-11" class="tab-pane">
                                <div class="product-slider-active-5">
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-47.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Norda Coolpix Camera</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Norda Coolpix Camera</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-46.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Mini Protector</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Mini Protector</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-49.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Norda Phone A38</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$1,238.50 </span>
                                                    <span class="old-price">$1,542.85</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Norda Phone A38</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$1,238.50 </span>
                                                    <span class="old-price">$1,542.85</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-48.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Norda Phone 6s 64GB</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Norda Phone 6s 64GB</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-46.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Mini Protector</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Mini Protector</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="padding-10-row-col">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="banner-wrap banner-border-1 mt-40 mb-30">
                                        <div class="banner-img banner-img-zoom">
                                            <a href="product-details.html"><img src="{{ URL::asset('assets/images/banner/banner-16.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="banner-content-15">
                                            <div class="banner-content-15-top">
                                                <div class="banner-content-15-brand">
                                                    <span>JATA</span>
                                                </div>
                                                <p>super bass <br>tech 2.0</p>
                                            </div>
                                            <h2>Jata Speaker</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="banner-wrap banner-border-1 banner-mt-none-xs mt-40 mb-30">
                                        <div class="banner-img banner-img-zoom">
                                            <a href="product-details.html"><img src="{{ URL::asset('assets/images/banner/banner-17.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="banner-content-16">
                                            <h2>Microsoft Surface Pro 7 - 12.3”</h2>
                                            <div class="banner-price">
                                                <span class="old-price">$502.50</span>
                                                <span>$425.60</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-list-style-wrap">
                            <div class="product-list-style">
                                <a class="active" href="shop.html">Televisions </a>
                                <a href="shop.html"> Air Conditions </a>
                                <a href="shop.html">Washing Machine </a>
                                <a href="shop.html">Laptop </a>
                                <a href="shop.html">Computer </a>
                                <a href="shop.html">Microwaves </a>
                                <a href="shop.html">Equipments </a>
                                <a href="shop.html">Accessories </a>
                            </div>
                            <div class="btn-style-8">
                                <a href="shop.html">View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-85">
            <div class="container">
                <div class="section-title-5 section-title-5-bg-2 mb-10">
                    <i class="purple icon-screen-desktop"></i>
                    <h5 class="purple">apparel & clothing</h5>
                </div>
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="tab-style-7 tab-hm6-categories nav">
                            <a class="active" href="#product-12" data-toggle="tab">Popular </a>
                            <a href="#product-13" data-toggle="tab"> Best Seller </a>
                            <a href="#product-14" data-toggle="tab">Sale </a>
                        </div>
                        <div class="tab-content tab-hm6-categories-slider tab-content-mrg-top jump">
                            <div id="product-12" class="tab-pane active">
                                <div class="product-slider-active-5">
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-81.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Brown T-shirt</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Brown T-shirt</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-82.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Das Sport Sneaker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Das Sport Sneaker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-83.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">White Duffles</a></h3>
                                                <div class="product-price-2">
                                                    <span>$70.50 </span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">White Duffles</a></h3>
                                                <div class="product-price-2">
                                                    <span>$70.50 </span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-84.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Grey Watches</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Grey Watches</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-82.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Das Sport Sneaker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Das Sport Sneaker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="product-13" class="tab-pane">
                                <div class="product-slider-active-5">
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-84.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Grey Watches</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Grey Watches</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-83.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">White Duffles</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">White Duffles</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-82.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Das Sport Sneaker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$80.50 </span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Das Sport Sneaker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$80.50 </span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-81.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Brown T-shirt</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Brown T-shirt</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-83.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">White Duffles</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">White Duffles</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="product-14" class="tab-pane">
                                <div class="product-slider-active-5">
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-82.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Das Sport Sneaker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Das Sport Sneaker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-81.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Brown T-shirt</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Brown T-shirt</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-84.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Grey Watches</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$70.50 </span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Grey Watches</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$70.50 </span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-83.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">White Duffles</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">White Duffles</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-81.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Brown T-shirt</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Brown T-shirt</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="padding-10-row-col">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="banner-wrap banner-border-1 mt-40 mb-30">
                                        <div class="banner-img banner-img-zoom">
                                            <a href="product-details.html"><img src="{{ URL::asset('assets/images/banner/banner-23.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="banner-content-19">
                                            <h2>set 3 soften <br>shorts</h2>
                                            <span>discount</span>
                                            <h4>25% OFF</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="banner-wrap banner-border-1 banner-mt-none-xs mt-40 mb-30">
                                        <div class="banner-img banner-img-zoom">
                                            <a href="product-details.html"><img src="{{ URL::asset('assets/images/banner/banner-24.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="banner-content-21">
                                            <span>mega sale</span>
                                            <h2><span>50% OFF</span> Basic <br> Tee Flavor</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-list-style-wrap">
                            <div class="product-list-style">
                                <a class="active" href="shop.html">Men </a>
                                <a href="shop.html">Women </a>
                                <a href="shop.html">Girls </a>
                                <a href="shop.html">Boys </a>
                                <a href="shop.html">Kids </a>
                                <a href="shop.html">Shoes </a>
                                <a href="shop.html">Bags </a>
                                <a href="shop.html">Accessories </a>
                            </div>
                            <div class="btn-style-8">
                                <a href="shop.html">View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-85">
            <div class="container">
                <div class="section-title-5 section-title-5-bg-3 mb-10">
                    <i class="green icon-screen-desktop"></i>
                    <h5 class="green">home & furniture</h5>
                </div>
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="tab-style-7 tab-hm6-categories nav">
                            <a class="active" href="#product-15" data-toggle="tab">Popular </a>
                            <a href="#product-16" data-toggle="tab"> Best Seller </a>
                            <a href="#product-17" data-toggle="tab">Sale </a>
                        </div>
                        <div class="tab-content tab-hm6-categories-slider tab-content-mrg-top jump">
                            <div id="product-15" class="tab-pane active">
                                <div class="product-slider-active-5">
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-85.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">White Rice Cooker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">White Rice Cooker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-86.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Set 24 Knifes</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Set 24 Knifes</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-87.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Pack 10 Utensils</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$1,238.50 </span>
                                                    <span class="old-price">$1,542.85</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Pack 10 Utensils</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$1,238.50 </span>
                                                    <span class="old-price">$1,542.85</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-88.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Super Plastic Chair</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Super Plastic Chair</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-86.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Set 24 Knifes</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Set 24 Knifes</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="product-16" class="tab-pane">
                                <div class="product-slider-active-5">
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-88.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Super Plastic Chair</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Super Plastic Chair</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-87.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Pack 10 Utensils</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$1,238.50 </span>
                                                    <span class="old-price">$1,542.85</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Pack 10 Utensils</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$1,238.50 </span>
                                                    <span class="old-price">$1,542.85</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-86.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Set 24 Knifes</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Set 24 Knifes</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-85.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">White Rice Cooker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">White Rice Cooker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-86.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Set 24 Knifes</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Set 24 Knifes</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="product-17" class="tab-pane">
                                <div class="product-slider-active-5">
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-86.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Set 24 Knifes</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Set 24 Knifes</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-85.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">White Rice Cooker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">White Rice Cooker</a></h3>
                                                <div class="product-price-2">
                                                    <span>$38.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-88.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Super Plastic Chair</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Super Plastic Chair</a></h3>
                                                <div class="product-price-2">
                                                    <span>$938.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-87.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Pack 10 Utensils</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$1,238.50 </span>
                                                    <span class="old-price">$1,542.85</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Pack 10 Utensils</a></h3>
                                                <div class="product-price-2">
                                                    <span class="new-price">$1,238.50 </span>
                                                    <span class="old-price">$1,542.85</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="product-details.html">
                                                    <img src="{{ URL::asset('assets/images/product/product-86.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">Set 24 Knifes</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">Set 24 Knifes</a></h3>
                                                <div class="product-price-2">
                                                    <span>$485.50</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="padding-10-row-col">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="banner-wrap banner-border-1 mt-40 mb-30">
                                        <div class="banner-img banner-img-zoom">
                                            <a href="product-details.html"><img src="{{ URL::asset('assets/images/banner/banner-25.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="banner-content-19">
                                            <h2 class="capitalize">Magic Bullet <br>NutriBullet Blender</h2>
                                            <span>discount</span>
                                            <h4>25% OFF</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="banner-wrap banner-border-1 banner-mt-none-xs mt-40 mb-30">
                                        <div class="banner-img banner-img-zoom">
                                            <a href="product-details.html"><img src="{{ URL::asset('assets/images/banner/banner-26.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="banner-content-22">
                                            <span>IKEA</span>
                                            <h2>pendant <br>lighting</h2>
                                            <p>lorem ispum dolor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-list-style-wrap">
                            <div class="product-list-style">
                                <a class="active" href="shop.html">Home Decor </a>
                                <a href="shop.html" data-toggle="tab"> Furniture </a>
                                <a href="shop.html" data-toggle="tab">Kitchen & Dinning </a>
                                <a href="shop.html" data-toggle="tab">Bedding & Bath </a>
                                <a href="shop.html" data-toggle="tab">Appliances </a>
                                <a href="shop.html" data-toggle="tab">Patio & Gardens </a>
                                <a href="shop.html" data-toggle="tab">Markdowns </a>
                                <a href="shop.html" data-toggle="tab">Equipments </a>
                            </div>
                            <div class="btn-style-8">
                                <a href="shop.html">View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us-area pb-115">
            <div class="container">
                <div class="about-us-content-2">
                    <div class="about-us-content-2-title">
                        <h4>NORDA The One-stop Shopping Destination</h4>
                    </div>
                    <p>E-commerce is revolutionizing the way we all shop in Bangladesh. Why do you want to hop from one store to another in search of the latest phone when you can find it on the Internet in a single click? Not only mobiles. Flipkart houses everything you can possibly imagine, from trending electronics like laptops, tablets, smartphones, and mobile accessories to in-vogue fashion staples like shoes, clothing and lifestyle accessories; from modern furniture like sofa sets and wardrobes to appliances that make your life easy like washing machines, TVs, ACs, mixer grinder juicers and other time-saving kitchen and small appliances; from home furnishings like cushion covers, mattresses and bedsheets to toys and musical instruments, we got them all covered. You name it, and you can stay assured about finding them all here. For those of you with erratic working hours, Flipkart is your best bet. Shop in your PJs, at night or in the wee hours of the morning. This e-commerce never shuts down.</p>
                    <p>What's more, with our year-round shopping festivals and events, our prices are irresistible. We're sure you'll find yourself picking up more than what you had in mind. If you are wondering why you should shop from Flipkart when there are multiple options available to you, well, the below will answer your question.</p>
                </div>
            </div>
        </div>
       
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="{{ URL::asset('assets/images/product/product-1.jpg') }}" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="{{ URL::asset('assets/images/product/product-3.jpg') }}" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="{{ URL::asset('assets/images/product/product-6.jpg') }}" alt="">
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="{{ URL::asset('assets/images/product/product-3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active nav-style-6">
                                        <a class="active" data-toggle="tab" href="#pro-1"><img src="{{ URL::asset('assets/images/product/quickview-s1.jpg') }}" alt=""></a>
                                        <a data-toggle="tab" href="#pro-2"><img src="{{ URL::asset('assets/images/product/quickview-s2.jpg') }}" alt=""></a>
                                        <a data-toggle="tab" href="#pro-3"><img src="{{ URL::asset('assets/images/product/quickview-s3.jpg') }}" alt=""></a>
                                        <a data-toggle="tab" href="#pro-4"><img src="{{ URL::asset('assets/images/product/quickview-s2.jpg') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Simple Black T-Shirt</h2>
                                    <div class="product-ratting-review-wrap">
                                        <div class="product-ratting-digit-wrap">
                                            <div class="product-ratting">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                            </div>
                                            <div class="product-digit">
                                                <span>5.0</span>
                                            </div>
                                        </div>
                                        <div class="product-review-order">
                                            <span>62 Reviews</span>
                                            <span>242 orders</span>
                                        </div>
                                    </div>
                                    <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                                    <div class="pro-details-price">
                                        <span class="new-price">$75.72</span>
                                        <span class="old-price">$95.72</span>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li><a class="dolly" href="#">dolly</a></li>
                                                <li><a class="white" href="#">white</a></li>
                                                <li><a class="azalea" href="#">azalea</a></li>
                                                <li><a class="peach-orange" href="#">Orange</a></li>
                                                <li><a class="mona-lisa active" href="#">lisa</a></li>
                                                <li><a class="cupid" href="#">cupid</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">XS</a></li>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                    <div class="product-details-meta">
                                        <ul>
                                            <li><span>Categories:</span> <a href="#">Woman,</a> <a href="#">Dress,</a> <a href="#">T-Shirt</a></li>
                                            <li><span>Tag: </span> <a href="#">Fashion,</a> <a href="#">Mentone</a> , <a href="#">Texas</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-action-wrap">
                                        <div class="pro-details-add-to-cart">
                                            <a title="Add to Cart" href="#">Add To Cart </a>
                                        </div>
                                        <div class="pro-details-action">
                                            <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                            <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                            <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                            <div class="product-dec-social">
                                                <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook"></i></a>
                                                <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                                <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                                <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->

   
@stop
