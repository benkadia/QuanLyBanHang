@extends('frontend.master')
@section('content')
<!-- slider area start -->
<section class="slider__area">
    <div class="slider__active swiper-container">
        <div class="swiper-wrapper">
            <div class="slider__item slider__height swiper-slide d-flex align-items-center include-bg" data-background="{{asset('frontend')}}/assets/img/slider/3/slider-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="slider__content slider__content-3 p-relative z-index-11 text-center">
                                <span data-animation="fadeInUp" data-delay=".3s">wooden edition</span>
                                <h3 class="slider__title" data-animation="fadeInUp" data-delay=".5s">Liveable Luxury</h3>
                                <p data-animation="fadeInUp" data-delay=".5s">Combining Extraordinary Quality</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__item slider__height swiper-slide d-flex align-items-center include-bg" data-background="{{asset('frontend')}}/assets/img/slider/3/slider-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="slider__content slider__content-3 p-relative z-index-11 text-center">
                                <span data-animation="fadeInUp" data-delay=".3s">SUMMER ‘21</span>
                                <h3 class="slider__title" data-animation="fadeInUp" data-delay=".5s">Living Comportable</h3>
                                <p data-animation="fadeInUp" data-delay=".4s">Combining Extraordinary Quality</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-pagination main-slider-pagination-2">
            <button class="main-slider-button-prev"><i class="fal fa-angle-left"></i></button>
            <button class="main-slider-button-next"><i class="fal fa-angle-right"></i></button>
        </div>
    </div>
</section>
<!-- slider area end -->

<!-- brand__area start -->
<section class="brand__area grey-bg-3 pt-30">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4">
                <div class="brand__info mb-30">
                    <h4>Our Top Brands</h4>
                    <a href="shop.html">Browse All</a>
                </div>
            </div>
            <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-8">
                <div class="brand__slider owl-carousel mb-30">
                    <div class="brand__item">
                        <a href="#"><img src="{{asset('frontend')}}/assets/img/brand/brand-1.png" alt=""></a>
                    </div>
                    <div class="brand__item swiper-slide">
                        <a href="#"><img src="{{asset('frontend')}}/assets/img/brand/brand-2.png" alt=""></a>
                    </div>
                    <div class="brand__item swiper-slide">
                        <a href="#"><img src="{{asset('frontend')}}/assets/img/brand/brand-3.png" alt=""></a>
                    </div>
                    <div class="brand__item swiper-slide">
                        <a href="#"><img src="{{asset('frontend')}}/assets/img/brand/brand-4.png" alt=""></a>
                    </div>
                    <div class="brand__item swiper-slide">
                        <a href="#"><img src="{{asset('frontend')}}/assets/img/brand/brand-5.png" alt=""></a>
                    </div>
                    <div class="brand__item swiper-slide">
                        <a href="#"><img src="{{asset('frontend')}}/assets/img/brand/brand-6.png" alt=""></a>
                    </div>
                    <div class="brand__item swiper-slide">
                        <a href="#"><img src="{{asset('frontend')}}/assets/img/brand/brand-1.png" alt=""></a>
                    </div>
                    <div class="brand__item swiper-slide">
                        <a href="#"><img src="{{asset('frontend')}}/assets/img/brand/brand-2.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- brand__area start -->

<!-- product area start -->
<section class="product__area pt-85 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xxl-7 col-lg-7">
                <div class="product__item-wrapper">
                    <div class="product__top section__title-line d-sm-flex align-items-start mb-35">
                        <div class="section__title-wrapper mr-30">
                            <h3 class="section__title section__title-4">Sản phẩm mới</h3>
                        </div>
                    </div>
                    <div class="product__tab-content">
                        <div class="product__item-slider common-nav common-dot owl-carousel">
                            @foreach ($list1 as $item)
                            @include('frontend.product.item')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-lg-5">
                <div class="product__item-wrapper product__item-wrapper-4">
                    <div class="product__top section__title-line d-sm-flex align-items-start mb-35">
                        <div class="section__title-wrapper mr-30">
                            <h3 class="section__title section__title-4">Sản phẩm xem nhiều</h3>
                        </div>
                    </div>
                    <div class="product__tab-content">
                        <div class="product__item-slider-2 common-nav common-dot owl-carousel">
                            @foreach ($list2 as $item)
                            @include('frontend.product.item')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product area end -->

<!-- trending__categories start -->
<section class="trending__categories grey-bg-3 pt-85 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="trending__info text-center">
                    <h5>Trending Categories</h5>
                    <p>There are many variations passages Lorem Ipsum available majority</p>
                </div>
            </div>
        </div>
        <div class="row mt-30">
            <div class="col-xl-4 col-lg-6">
                <div class="trending__categories-item mb-30">
                    <div class="image w-img">
                        <a href="shop.html"><img src="{{asset('frontend')}}/assets/img/products/category/1.jpg" alt=""></a>
                    </div>
                    <div class="trending__categories-content">
                        <h6>Shop by Piece</h6>
                        <div class="smc-list">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Chairs</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Tables</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Sofas</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Desks</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Shelving</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Curtains</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Wood Stool</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="smtview-option mt-15">
                            <a href="shop.html" class="ct-view">View Categories</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="trending__categories-item mb-30">
                    <div class="image w-img">
                        <a href="shop.html"><img src="{{asset('frontend')}}/assets/img/products/category/2.jpg" alt=""></a>
                    </div>
                    <div class="trending__categories-content">
                        <h6>Shop by Brand</h6>
                        <div class="smc-list">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Fortune</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> By Lassen</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Donna Wilson</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Ferm Living</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Linie Design</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Menuing</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Luxurious</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="smtview-option mt-15">
                            <a href="shop.html" class="ct-view">View Categories</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="trending__categories-item mb-30">
                    <div class="image w-img">
                        <a href="shop.html"><img src="{{asset('frontend')}}/assets/img/products/category/3.jpg" alt=""></a>
                    </div>
                    <div class="trending__categories-content">
                        <h6>Shop by Collection</h6>
                        <div class="smc-list">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Bedroom</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Living Room</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Dining Room</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Lighting</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Lighting</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Textiles</a></li>
                                        <li><a href="shop.html"><i class="fal fa-angle-right"></i> Curtaining</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="smtview-option mt-15">
                            <a href="shop.html" class="ct-view">View Categories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- trending__categories end -->

<!-- product area start -->
<section class="product__area pt-80 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="section__title-line section__title-line-2">
                    <div class="row">
                        <div class="col-xxl-6 col-lg-6">
                            <div class="section__title-wrapper">
                                <h2 class="section__title section__title-5">Popular Products</h2>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6">
                            <div class="product__tab product__tab-2">
                                <ul class="nav nav-tabs" id="trendingTab" role="tablist">
                                    <li class="nav-item nav-item-3" role="presentation">
                                    <button class="nav-link active nav-link-4" id="new-4-tab" data-bs-toggle="tab" data-bs-target="#new-2" type="button" role="tab" aria-controls="new-2" aria-selected="true">Furniture</button>
                                    </li>
                                    <li class="nav-item nav-item-3" role="presentation">
                                    <button class="nav-link nav-link-4" id="featured-4-tab" data-bs-toggle="tab" data-bs-target="#featured-2" type="button" role="tab" aria-controls="featured-2" aria-selected="false">Decor</button>
                                    </li>
                                    <li class="nav-item nav-item-3" role="presentation">
                                    <button class="nav-link nav-link-4" id="top-6-tab" data-bs-toggle="tab" data-bs-target="#top-2" type="button" role="tab" aria-controls="top-2" aria-selected="false">Lighting</button>
                                    </li>
                                    <li class="nav-item nav-item-3" role="presentation">
                                        <button class="nav-link nav-link-4" id="top-7-tab" data-bs-toggle="tab" data-bs-target="#top-3" type="button" role="tab" aria-controls="top-3" aria-selected="false">Rungs</button>
                                    </li>
                                    <li class="nav-item nav-item-3" role="presentation">
                                        <button class="nav-link nav-link-4" id="top-8-tab" data-bs-toggle="tab" data-bs-target="#top-4" type="button" role="tab" aria-controls="top-4" aria-selected="false">Bathroom</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12">
                <div class="product__item-wrapper-2 pt-30">
                    <div class="product__tab-content">
                        <div class="tab-content" id="trendingTabContent">
                            <div class="tab-pane fade show active" id="new-2" role="tabpanel" aria-labelledby="new-2">
                                <div class="product-slider-3 owl-carousel common-dot">
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-3.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-1.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-2.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-4.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-5.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-7.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-8.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-9.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-10.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-7.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-8.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-9.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-10.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="featured-2" role="tabpanel" aria-labelledby="featured-2">
                                <div class="product-slider-3 owl-carousel common-dot">
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-7.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-8.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-9.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-10.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-3.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-1.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-2.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-4.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-5.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-7.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-8.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-9.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-10.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-2" role="tabpanel" aria-labelledby="top-2">
                                <div class="product-slider-3 owl-carousel common-dot">
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-8.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-9.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-10.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-7.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-3.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-1.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-2.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-4.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-5.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-7.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-8.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-9.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-10.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-3" role="tabpanel" aria-labelledby="top-3">
                                <div class="product-slider-3 owl-carousel common-dot">
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-2.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-4.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-3.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-1.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-5.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-8.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-9.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-10.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-7.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-7.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-8.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-9.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-10.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="top-4" role="tabpanel" aria-labelledby="top-4">
                                <div class="product-slider-3 owl-carousel common-dot">
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-3.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-1.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-5.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-2.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-4.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                            <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                            l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                            C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                        <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-8.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-9.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-10.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-7.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1">
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>20%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Furniture</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Wooden Single Drawer</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$125.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-7.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155.00</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-8.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-9.jpg" alt="">
                                                        </a>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shp.html">LIVING ROOM</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Smart Watches Wood</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price"><del>$155</del>  $140.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="product__item mb-20">
                                                    <div class="product__thumb w-img fix">
                                                        <a href="product-details.html">
                                                            <img src="{{asset('frontend')}}/assets/img/products/product-2/product-10.jpg" alt="">
                                                        </a>
                                                        <div class="product__flash-4">
                                                            <span>15%</span>
                                                        </div>
                                                        <div class="product__action transition-3">
                                                            <ul>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <g>
                                                                           <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                                           l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                                           C18.83,18.71,18.44,19,18,19z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="#">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                                        L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                                        c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                                        C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                                        c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                                        c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                                        c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                                        c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                                        c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                               <li>
                                                                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                                     <svg viewBox="0 0 22 22">
                                                                        <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                                        C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                                        C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                                        s2-0.9,2-2S12.1,9,11,9z"/>
                                                                     </svg>
                                                                  </a>
                                                               </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product__content">
                                                        <div class="product__tag product__tag-4">
                                                            <span>
                                                                <a href="shop.html">Wooden</a>
                                                            </span>
                                                        </div>
                                                        <h3 class="product__title">
                                                            <a href="product-details.html">Panton Tunior Chair</a>
                                                        </h3>
                                                        <div class="product__price product__price-4 mb-10">
                                                            <span class="price">$199.00</span>
                                                        </div>
                                                        <div class="product__select-button">
                                                            <a href="product-details.html" class="select-btn w-100">Select Options</a>
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product area end -->

<!-- banner__sd-area-start -->
<div class="banner__sd-area mt-30 mb-55" data-background="{{asset('frontend')}}/assets/img/products/banner/2/sd-banner.jpg">
    <div class="upc-shape">
        <div class="bakix-marker map-c1">
            <div class="bakix-map-icon">
                <i class="fas fa-circle"></i>
            </div>
            <div class="bakix-map-address">
                <p>Lodge Flush Mount</p>
            </div>
        </div>
        <div class="bakix-marker map-c2">
            <div class="bakix-map-icon">
                <i class="fas fa-circle"></i>
            </div>
            <div class="bakix-map-address">
                <p>Lodge Flush Mount</p>
            </div>
        </div>
        <div class="bakix-marker map-c3">
            <div class="bakix-map-address">
                <p>Lodge Flush Mount</p>
            </div>
            <div class="bakix-map-icon">
                <i class="fas fa-circle"></i>
            </div>
        </div>
        <div class="bakix-marker map-c4">
            <div class="bakix-map-address">
                <p>Lodge Flush Mount</p>
            </div>
            <div class="bakix-map-icon">
                <i class="fas fa-circle"></i>
            </div>
        </div>
        <div class="bakix-marker map-c5">
            <div class="bakix-map-address">
                <p>Lodge Flush Mount</p>
            </div>
            <div class="bakix-map-icon">
                <i class="fas fa-circle"></i>
            </div>
        </div>
    </div>
</div>
<!-- banner__sd-area-end -->

<!-- product trending area start -->
<section class="product__area-trending pt-30 pb-105">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="product__item-wrapper">
                    <div class="product__top section__title-line d-sm-flex align-items-start mb-35">
                        <div class="product__tab product__tab-3">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="new-3-tab" data-bs-toggle="tab" data-bs-target="#new-3" type="button" role="tab" aria-controls="new-3" aria-selected="true">Top Rated  </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link" id="featured-3-tab" data-bs-toggle="tab" data-bs-target="#featured-3" type="button" role="tab" aria-controls="featured-3" aria-selected="false">Featured Products</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link" id="featured-8-tab" data-bs-toggle="tab" data-bs-target="#featured-8" type="button" role="tab" aria-controls="featured-8" aria-selected="false">Featured Products</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12">
                <div class="product__tab-content">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="new-3" role="tabpanel" aria-labelledby="new-3-tab">
                            <div class="product__item-trending-slider-2 common-dot owl-carousel">
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-3.jpg" alt="">
                                            </a>
                                            <div class="product__flash-4">
                                                <span>20%</span>
                                            </div>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Furniture</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Wooden Single Drawer</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$125.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-1.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155.00</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-2.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-4.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-5.jpg" alt="">
                                            </a>
                                            <div class="product__flash-4">
                                                <span>15%</span>
                                            </div>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                            </a>
                                            <div class="product__flash-4">
                                                <span>20%</span>
                                            </div>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Furniture</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Wooden Single Drawer</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$125.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-7.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155.00</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-8.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-1.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155.00</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-2.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-4.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-5.jpg" alt="">
                                            </a>
                                            <div class="product__flash-4">
                                                <span>15%</span>
                                            </div>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featured-3" role="tabpanel" aria-labelledby="featured-3-tab">
                            <div class="product__item-trending-slider-2 common-dot owl-carousel">
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-5.jpg" alt="">
                                            </a>
                                            <div class="product__flash-4">
                                                <span>15%</span>
                                            </div>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                            </a>
                                            <div class="product__flash-4">
                                                <span>20%</span>
                                            </div>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Furniture</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Wooden Single Drawer</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$125.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-7.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155.00</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-3.jpg" alt="">
                                            </a>
                                            <div class="product__flash-4">
                                                <span>20%</span>
                                            </div>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Furniture</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Wooden Single Drawer</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$125.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-1.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155.00</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-2.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-4.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-8.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-3.jpg" alt="">
                                            </a>
                                            <div class="product__flash-4">
                                                <span>20%</span>
                                            </div>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Furniture</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Wooden Single Drawer</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$125.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-1.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155.00</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-2.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-4.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="featured-8" role="tabpanel" aria-labelledby="featured-8-tab">
                            <div class="product__item-trending-slider-2 common-dot owl-carousel">
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-8.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-2.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-4.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-5.jpg" alt="">
                                            </a>
                                            <div class="product__flash-4">
                                                <span>15%</span>
                                            </div>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                            </a>
                                            <div class="product__flash-4">
                                                <span>20%</span>
                                            </div>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Furniture</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Wooden Single Drawer</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$125.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-4.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-5.jpg" alt="">
                                            </a>
                                            <div class="product__flash-4">
                                                <span>15%</span>
                                            </div>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-6.jpg" alt="">
                                            </a>
                                            <div class="product__flash-4">
                                                <span>20%</span>
                                            </div>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Furniture</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Wooden Single Drawer</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$125.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-7.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155.00</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-3.jpg" alt="">
                                            </a>
                                            <div class="product__flash-4">
                                                <span>20%</span>
                                            </div>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Furniture</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Wooden Single Drawer</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$125.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-1.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shp.html">LIVING ROOM</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Smart Watches Wood</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price"><del>$155.00</del>  $140.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="product__item mb-20">
                                        <div class="product__thumb w-img fix">
                                            <a href="product-details.html">
                                                <img src="{{asset('frontend')}}/assets/img/products/product-2/product-2.jpg" alt="">
                                            </a>
                                            <div class="product__action transition-3">
                                                <ul>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <g>
                                                               <path d="M18,19H6c-0.5,0-0.92-0.37-0.99-0.86L3.13,5H1C0.45,5,0,4.55,0,4s0.45-1,1-1h3c0.5,0,0.92,0.37,0.99,0.86L6.87,17h10.39
                                                               l2.4-8H11c-0.55,0-1-0.45-1-1s0.45-1,1-1h10c0.32,0,0.61,0.15,0.8,0.4c0.19,0.25,0.25,0.58,0.16,0.88l-3,10
                                                               C18.83,18.71,18.44,19,18,19z"/>
                                                            </g>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="#">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                                            L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                                            c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                                            C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                                            c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                                            c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                                            c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                                            c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                                            c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                   <li>
                                                      <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productModalId">
                                                         <svg viewBox="0 0 22 22">
                                                            <path d="M11,19c-6.53,0-10.42-7.23-10.58-7.53L0.17,11l0.25-0.47C0.58,10.23,4.47,3,11,3s10.42,7.23,10.58,7.53L21.83,11l-0.25,0.47
                                                            C21.42,11.77,17.53,19,11,19z M2.46,11c0.92,1.49,4.08,6,8.54,6c4.48,0,7.63-4.51,8.54-6C18.62,9.52,15.46,5,11,5
                                                            C6.52,5,3.37,9.51,2.46,11z M11,15c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S13.21,15,11,15z M11,9c-1.1,0-2,0.9-2,2s0.9,2,2,2
                                                            s2-0.9,2-2S12.1,9,11,9z"/>
                                                         </svg>
                                                      </a>
                                                   </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__tag product__tag-4">
                                                <span>
                                                    <a href="shop.html">Wooden</a>
                                                </span>
                                            </div>
                                            <h3 class="product__title">
                                                <a href="product-details.html">Panton Tunior Chair</a>
                                            </h3>
                                            <div class="product__price product__price-4 mb-10">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <div class="product__select-button">
                                                <a href="product-details.html" class="select-btn w-100">Select Options</a>
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
    </div>
</section>
<!-- product trending area end -->

<!-- department__area start -->
<section class="department__area grey-bg-3 pt-85 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="trending__info text-center">
                    <h5>Explore All Department</h5>
                    <p>There are many variations passages Lorem Ipsum available majority</p>
                </div>
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-xl-6 col-lg-6">
                <div class="department__image w-img mb-30">
                    <div class="department__product-sm-image">
                        <img src="{{asset('frontend')}}/assets/img/products/department/1.jpg" alt="">
                    </div>
                    <div class="department__product">
                        <a href="shop.html"><span>Wooden</span><p>(210)</p></a>
                    </div>
                </div>
                <div class="department__image w-img mb-30">
                    <div class="department__product-sm-image">
                        <img src="{{asset('frontend')}}/assets/img/products/department/2.jpg" alt="">
                    </div>
                    <div class="department__product">
                        <a href="shop.html"><span>Wall Arts</span><p>(377)</p></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="department__image w-img mb-30">
                    <div class="department__product-sm-image">
                        <img src="{{asset('frontend')}}/assets/img/products/department/3.jpg" alt="">
                    </div>
                    <div class="department__product">
                        <a href="shop.html"><span>Cupbord</span><p>(150)</p></a>
                    </div>
                </div>
                <div class="department__image w-img mb-30">
                    <div class="department__product-sm-image">
                        <img src="{{asset('frontend')}}/assets/img/products/department/4.jpg" alt="">
                    </div>
                    <div class="department__product">
                        <a href="shop.html"><span>Leather</span><p>(170)</p></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="view-option-button text-center">
                    <a href="shop.html" class="select-btn-3">Browse All Departments</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- department__area end -->

<!-- blog area start -->
<section class="blog__area pt-85 pb-30">
    <div class="container">
        <div class="section__title-line section__title-line-2 mb-30">
            <div class="section__title-wrapper d-flex align-items-center">
                <h2 class="section__title-5">Read Popular Articals</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12">
                <div class="blog__slider-3 owl-carousel common-nav">
                    <div class="blog__item blog__item-2 transition-3 mb-30 white-bg">
                        <div class="blog__thumb w-img fix p-relative">
                            <a href="blog-details.html">
                                <img src="{{asset('frontend')}}/assets/img/blog/blog-5.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog__content blog__content-3 p-relative">
                            <div class="blog__meta blog__meta-3 mb-10">
                                <span class="blog-sm-author mr-20">
                                    <a href="blog-details.html">ADMIN</a>
                                </span>
                                <span>
                                    <a href="#"> MAY 20, 2020</a>
                                </span>

                            </div>
                            <h3 class="blog__title">
                                <a href="blog-details.html">Kitchen Inspired On Japanese</a>
                            </h3>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aene sollicitious udin, lorem quisbib facilisis auris laoreet simply.</p>
                            <div class="blog__btn">
                                <a href="blog-details.html" class="link-btn-3">Read More <i class="fal fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog__item blog__item-2 transition-3 mb-30 white-bg">
                        <div class="blog__thumb w-img fix p-relative">
                            <a href="blog-details.html">
                                <img src="{{asset('frontend')}}/assets/img/blog/blog-6.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog__content blog__content-3 p-relative">
                            <div class="blog__meta blog__meta-3 mb-10">
                                <span class="blog-sm-author mr-20">
                                    <a href="blog-details.html">ADMIN</a>
                                </span>
                                <span>
                                    <a href="#"> MAY 20, 2021</a>
                                </span>
                            </div>
                            <h3 class="blog__title">
                                <a href="blog-details.html">Traveling Solo Is Awesome</a>
                            </h3>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aene sollicitious udin, lorem quisbib facilisis auris laoreet simply.</p>
                            <div class="blog__btn">
                                <a href="blog-details.html" class="link-btn-3">Read More <i class="fal fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog__item blog__item-2 transition-3 mb-30 white-bg">
                        <div class="blog__thumb w-img fix p-relative">
                            <a href="blog-details.html">
                                <img src="{{asset('frontend')}}/assets/img/blog/blog-7.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog__content blog__content-3 p-relative">
                            <div class="blog__meta blog__meta-3 mb-10">
                                <span class="blog-sm-author mr-20">
                                    <a href="blog-details.html">ADMIN</a>
                                </span>
                                <span>
                                    <a href="#"> MAY 20, 2019</a>
                                </span>
                            </div>
                            <h3 class="blog__title">
                                <a href="blog-details.html">A Beautiful Sunday Morning</a>
                            </h3>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aene sollicitious udin, lorem quisbib facilisis auris laoreet simply.</p>
                            <div class="blog__btn">
                                <a href="blog-details.html" class="link-btn-3">Read More <i class="fal fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog__item blog__item-2 transition-3 mb-30 white-bg">
                        <div class="blog__thumb w-img fix p-relative">
                            <a href="blog-details.html">
                                <img src="{{asset('frontend')}}/assets/img/blog/blog-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog__content blog__content-3 p-relative">
                            <div class="blog__meta blog__meta-3 mb-10">
                                <span class="blog-sm-author mr-20">
                                    <a href="blog-details.html">ADMIN</a>
                                </span>
                                <span>
                                    <a href="#"> June 20, 2021</a>
                                </span>
                            </div>
                            <h3 class="blog__title">
                                <a href="blog-details.html">What a Beautiful day that was</a>
                            </h3>
                            <p>In mattis ed mollis, eros et ultrices tempus, mau ipsum alihmtjha libero, non adipiscing dolor urna a orci. Aenean commodolig..</p>
                            <div class="blog__btn">
                                <a href="blog-details" class="link-btn-3">Read More <i class="fal fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog area end -->

<!-- shop modal start -->
<div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered product__modal" role="document">
        <div class="modal-content">
            <div class="product__modal-wrapper p-relative">
                <div class="product__modal-close p-absolute">
                    <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                </div>
                <div class="product__modal-inner">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product__modal-box">
                                <div class="tab-content" id="modalTabContent">
                                    <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="{{asset('frontend')}}/assets/img/products/quick-view/quick-view-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="{{asset('frontend')}}/assets/img/products/quick-view/quick-view-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="{{asset('frontend')}}/assets/img/products/quick-view/quick-view-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="{{asset('frontend')}}/assets/img/products/quick-view/quick-view-4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                            <img src="{{asset('frontend')}}/assets/img/products/quick-view/nav/quick-nav-1.jpg" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                        <img src="{{asset('frontend')}}/assets/img/products/quick-view/nav/quick-nav-2.jpg" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                        <img src="{{asset('frontend')}}/assets/img/products/quick-view/nav/quick-nav-3.jpg" alt="">
                                    </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                        <img src="{{asset('frontend')}}/assets/img/products/quick-view/nav/quick-nav-4.jpg" alt="">
                                    </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product__modal-content">
                            <h4 class="product__modal-title"><a href="product-details.html">Samsung C49J89: £875, Debenhams Plus</a></h4>
                            <div class="product__modal-des mb-40">
                                <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt </p>
                            </div>
                            <div class="product__modal-stock">
                                <span>Availability :</span>
                                <span>In Stock</span>
                            </div>
                            <div class="product__modal-stock sku mb-30">
                                <span>SKU:</span>
                                <span>Samsung C49J89: £875, Debenhams Plus</span>
                            </div>
                            <div class="product__modal-review d-sm-flex">
                                <div class="rating mb-15 mr-35">
                                <ul>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                </ul>
                                </div>
                                <div class="product__modal-add-review mb-15">
                                <span><a href="#">1 Review</a></span>
                                <span><a href="#">Add Review</a></span>
                                </div>
                            </div>
                            <div class="product__modal-price">
                                <span>$560.00</span>
                            </div>
                            <div class="product__modal-form mb-30">
                                <form action="#">
                                <div class="pro-quan-area d-lg-flex align-items-center">
                                    <div class="product-quantity mr-20 mb-25">
                                        <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                    </div>
                                    <div class="pro-cart-btn mb-25">
                                        <a href="cart.html" class="add-to-cart-btn">Add to cart</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="product__modal-links">
                                <ul>
                                <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop modal end -->
@endsection
