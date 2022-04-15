@extends('frontend.master')
@section('content')
    <!-- page__title-start -->
    <section class="page__title p-relative d-flex align-items-center"
        data-background="{{ asset('frontend/assets/img/bg/page-title-1.jpg') }}"
        style="background-image: url(&quot;assets/img/bg/page-title-1.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Your Cart</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page__title-end -->

    <!-- cart-area start -->
    <section class="cart-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if($cart->isNotEmpty())
                    <form action="{{route('f.updatecart')}}" method="post">
                        @csrf
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Hình</th>
                                        <th class="cart-product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-subtotal">Thành tiền</th>
                                        <th class="product-remove">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $item)
                                    <tr>
                                        <td class="product-thumbnail"><a href="{{route('p.detail',[$item->alias,$item->id])}}"><img
                                                    src="{{ asset($item->image ? $item->image : 'upload/images/noimage.png') }}" alt="{{$item->name}}"></a></td>
                                        <td class="product-name"><a href="{{route('p.detail',[$item->alias,$item->id])}}">{{$item->name}}</a></td>
                                        <td class="product-price"><span class="amount">{{ number_format($item->price) }}</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus"><input name="buyqty[{{$item->id}}]" type="text" value="{{ number_format($item->buyqty) }}">
                                                <div class="dec qtybutton">-</div>
                                                <div class="inc qtybutton">+</div>
                                                <div class="dec qtybutton">-</div>
                                                <div class="inc qtybutton">+</div>
                                                <div class="dec qtybutton">-</div>
                                                <div class="inc qtybutton">+</div>
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">{{ number_format($item->totalamount) }}</span></td>
                                        <td class="product-remove"><a onclick="return confirm('Bạn có muốn xóa item này không?')" href="{{route('f.deleteitem',$item->id)}}"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text d-none" name="coupon_code" value=""
                                            placeholder="Coupon code" type="text">
                                        <a class="btn-tp-2" name="apply_coupon" type="submit" href="{{route('f.home')}}">Mua tiếp</a>
                                    </div>
                                    <div class="coupon2">
                                        <button class="btn-tp-2" name="update_cart" type="submit">Cập nhật</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-5">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul class="mb-20">
                                        <li>Tổng <span>{{number_format($cart->sum('totalamount'))}}</span></li>
                                    </ul>
                                    <a class="btn-tp-2" href="{{route('f.checkout')}}">Thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    @else
                    <div class="text-danger">Giỏ hàng trống</div>
                    <a class="btn-tp-2" name="apply_coupon" type="submit" href="{{route('f.home')}}">Mua tiếp</a>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- cart-area end -->
@endsection
