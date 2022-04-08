 <!-- header area start -->
 <header class="d-none d-lg-block">
    <div class="header__area">
        <div class="header__top d-none d-md-block pt-25 pb-25">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 d-none d-xl-block">
                        <div class="header__top-info">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset($configs['logo']->value)}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-6">
                        <div class="header__top-features header__top-features-3">
                            <div class="features__item features__item-2 mr-50">
                                <div class="features__icon features__icon-2 mr-20">
                                    <i class="flaticon-credit-card"></i>
                                </div>
                                <div class="features__content-2">
                                    <h3 class="features__title features__title-3">100% Payments</h3>
                                    <p>Monthly Installment</p>
                                </div>
                            </div>
                            <div class="features__item features__item-2 features__item-d">
                                <div class="features__icon features__icon-2 mr-20">
                                    <i class="flaticon-exchange"></i>
                                </div>
                                <div class="features__content-2">
                                    <h3 class="features__title features__title-3">14-Day Returns</h3>
                                    <p>Secure Payments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="header__action header__action-2 text-sm-end">
                            <ul>
                                <li>
                                    <a href="sign-in.html"><i class="fal fa-user-circle"></i></a>
                                </li>
                                <li>
                                    <a href="checkout.html">
                                        <i class="flaticon-random-button"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html"><i class="fal fa-heart"></i>
                                        <span class="cart-count">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html" data-bs-toggle="modal" data-bs-target="#cartMiniModal">
                                        <i class="fal fa-shopping-basket"></i>
                                        <span class="cart-count">3</span>
                                    </a>
                                    <span class="cart-price">$20.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__middle header__border grey-bg-3 d-none d-md-block pt-10 pb-10">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="header__search-3">
                            <form action="#">
                                <div class="header__search-input-2 header__search-input-3">
                                    <input type="text" placeholder="Search for product, brands & offer..">
                                    <div class="header__search-select">
                                        <select>
                                            <option>All categories</option>
                                            <option>Furniture</option>
                                            <option>Electronics</option>
                                            <option>Beauty</option>
                                        </select>
                                    </div>
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div
                            class="header__middle-right header__middle-right-d d-flex align-items-center justify-content-end">
                            <div class="sd-contact">
                                <span>Customer Service <a href="tel:+0889006690">+088 900 6690</a></span>
                            </div>
                            <div class="header__select header__select-2 d-flex align-items-center">
                                <div class="header__lang header__select-item header__select-item-3 mr-20">
                                    <div class="country-flag">
                                        <a href="#"><img src="{{asset('frontend')}}/assets//img/icon/flag.png" alt=""></a>
                                    </div>
                                    <select>
                                        <option>EN</option>
                                        <option>BN</option>
                                        <option>IN</option>
                                        <option>CH</option>
                                        <option>AM</option>
                                    </select>
                                </div>
                                <div class="header__currency header__select-item header__select-item-3">
                                    <select>
                                        <option>$USD</option>
                                        <option>Euro</option>
                                        <option>Yen</option>
                                        <option>Rupee</option>
                                        <option>Sterlin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom  black-bg d-none d-xl-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-lg-8 col-sm-6 col-4">
                        <div class="main-menu main-menu-3">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown">
                                        <a href="index.html">Home </a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="index.html">Home Style 1</a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">Home Style 2</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Home Style 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop.html">New Arrivals</a>
                                    </li>
                                    <li>
                                        <a href="about.html">About</a>
                                    </li>
                                    <li>
                                        <a href="shop.html">On Sale</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="about.html">Pages</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="sign-in.html">Sign In</a>
                                            </li>
                                            <li>
                                                <a href="sign-up.html">Sign Up</a>
                                            </li>
                                            <li>
                                                <a href="shop.html">Shop Page</a>
                                            </li>
                                            <li>
                                                <a href="shop-2.html">Shop 2 Page</a>
                                            </li>
                                            <li>
                                                <a href="product-details.html">product Details</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">Cart Page</a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">Checkout Page</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">Wishlist Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="blog.html">Blogs</a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="blog.html">Blog</a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-bar mb-5 d-xl-none">
                            <button type="button" class="header-bar-btn header-bar-btn-2" data-bs-toggle="modal"
                                data-bs-target="#offCanvasModal">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-8 col-lg-4">
                        <div class="logo-d d-xl-none text-sm-end">
                            <img src="{{asset('frontend')}}/assets//img/logo/logo-white.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->

<!-- mobile-header-area start -->
<div class="mobile-header-area pt-20 pb-20 d-xl-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <div class="mobile-logo">
                    <a href="index.html"><img src="{{asset('frontend')}}/assets//img/logo/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-6">
                <div class="header-bar d-xl-none text-end">
                    <button type="button" class="header-bar-btn" data-bs-toggle="modal"
                        data-bs-target="#offCanvasModal">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-header-area end -->
