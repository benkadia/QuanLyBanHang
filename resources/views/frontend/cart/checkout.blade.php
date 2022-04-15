@extends('frontend.master')
@section('content')
    <!-- page__title-start -->
    <section class="page__title p-relative d-flex align-items-center" data-background="assets/img/bg/page-title-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page__title-inner text-center">
                        <h1>Cheakout</h1>
                        <div class="page__title-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page__title-end -->

    <!-- coupon-area start -->
    <section class="coupon-area pt-120 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="coupon-accordion">
                        <!-- ACCORDION START -->
                        <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed
                                    est
                                    sit amet ipsum luctus.</p>
                                <form action="#">
                                    <p class="form-row-first">
                                        <label>Username or email <span class="required">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p class="form-row-last">
                                        <label>Password <span class="required">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p class="form-row">
                                        <button class="btn-tp" type="submit">Login</button>
                                        <label>
                                            <input type="checkbox">
                                            Remember me
                                        </label>
                                    </p>
                                    <p class="lost-password">
                                        <a href="#">Lost your password?</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <!-- ACCORDION END -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="coupon-accordion">
                        <!-- ACCORDION START -->
                        <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon">
                                        <input type="text" placeholder="Coupon Code">
                                        <button class="btn-tp" type="submit">Apply Coupon</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <!-- ACCORDION END -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- coupon-area end -->

    <!-- checkout-area start -->
    <section class="checkout-area pb-85">
        <div class="container">
            {{-- // Thông báo khi đặt hàng thành công --}}
            @if(session('type'))
<div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>{{session('title')}}</strong><br><br>{{session('msg')}}
</div>
@endif
{{-- Hiện tất cả lỗi lên --}}
<div class="text-center text-danger">
@foreach ($errors->all() as $error)
    {{$error}}
@endforeach
            <form action="{{ route('f.checkoutpost') }}" method="post" class="needs-validation {{$errors->all()?'was-validated':''}}" novalidate>
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkbox-form">
                            <h3>Thông tin mua hàng</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Họ <span class="required">*</span></label>
                                        <input name="bill_firstname" type="text" placeholder="" class="form-control @error('bill_firstname') is-invalid @enderror">
                                        @error('bill_firstname')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Tên <span class="required">*</span></label>
                                        <input name="bill_lastname" type="text" placeholder="" class="form-control @error('bill_lastname') is-invalid @enderror">
                                        @error('bill_lastname')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email <span class="required">*</span></label>
                                        <input name="bill_email" type="email" placeholder="" class="form-control @error('bill_email') is-invalid @enderror">
                                        @error('bill_email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Điện thoại <span class="required">*</span></label>
                                        <input name="bill_phone" type="text" placeholder="" class="form-control @error('bill_phone') is-invalid @enderror">
                                        @error('bill_phone')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Địa chỉ <span class="required">*</span></label>
                                        <input name="bill_address" type="text" placeholder="Street address" class="form-control @error('bill_address') is-invalid @enderror">
                                        @error('bill_address')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc">
                                        <input id="cbox" type="checkbox">
                                        <label>Create an account?</label>
                                    </div>
                                    <div id="cbox_info" class="checkout-form-list create-account">
                                        <p>Create an account by entering the information below. If you are a returning
                                            customer please login at the top of the page.</p>
                                        <label>Account password <span class="required">*</span></label>
                                        <input type="password" placeholder="password">
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">
                                <div class="ship-different-title">
                                    <h3>
                                        <label>Nhận hàng địa chỉ khác?</label>
                                        <input name="other_address" id="ship-box" type="checkbox">
                                    </h3>
                                </div>
                                <div id="ship-box-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Họ <span class="required">*</span></label>
                                                <input name="ship_firstname" type="text" placeholder="" class="form-control @error('ship_firstname') is-invalid @enderror">
                                                @error('ship_firstname')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Tên <span class="required">*</span></label>
                                                <input name="ship_lastname" type="text" placeholder="" class="form-control @error('ship_lastname') is-invalid @enderror">
                                                @error('ship_lastname')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email <span class="required">*</span></label>
                                                <input name="ship_email" type="email" placeholder="" class="form-control @error('ship_email') is-invalid @enderror">
                                                @error('ship_email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Điện thoại <span class="required">*</span></label>
                                                <input name="ship_phone" type="text" placeholder="" class="form-control @error('ship_phone') is-invalid @enderror">
                                                @error('ship_phone')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ <span class="required">*</span></label>
                                                <input name="ship_address" type="text" placeholder="Street address" class="form-control @error('ship_address') is-invalid @enderror">
                                                @error('ship_address')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>Ghi chú</label>
                                        <textarea id="checkout-mess" cols="30" name="notes" rows="10" placeholder="Ghi chú giao hàng" class="form-control @error('notes') is-invalid @enderror"></textarea>
                                        @error('notes')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="your-order mb-30 ">
                            <h3>Đơn hàng của bạn</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-total">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart as $item)
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{ $item->name }} <strong class="product-quantity"> ×
                                                        {{ number_format($item->buyqty) }}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span
                                                        class="amount">{{ number_format($item->totalamount) }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Tổng</th>
                                            <td><span
                                                    class="amount">{{ number_format($cart->sum('totalamount')) }}</span>
                                            </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Phí vận chuyển</th>
                                            <td>
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="shipping">
                                                        <label>Miễn phí:</label>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Tổng thanh toán</th>
                                            <td><strong><span
                                                        class="amount">{{ number_format($cart->sum('totalamount')) }}</span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="payment-method">
                                <div class="accordion" id="checkoutAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="checkoutOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                                <div class="form-check">
                                                    <label class="form-check-label" for="bank">
                                                        <input type="radio" class="form-check-input  @error('payment_method') is-invalid @enderror" name="payment_method" id="bank"
                                                            value="banktransfer" checked >
                                                        Chuyển khoản
                                                        @error('payment_method')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                                    </label>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="bankOne" class="accordion-collapse collapse show"
                                            aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                <p>Thông tin tài khoản ngân hàng</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="paypalThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#paypal" aria-expanded="false"
                                                aria-controls="paypal">
                                                <div class="form-check">
                                                    <label class="form-check-label" for="atm">
                                                        <input type="radio" class="form-check-input  @error('payment_method') is-invalid @enderror" name="payment_method" id="atm"
                                                            value="atm" >
                                                            ATM
                                                            @error('payment_method')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                                    </label>
                                                </div>
                                            </button>
                                        </h2>
                                        <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree"
                                            data-bs-parent="#checkoutAccordion">
                                            <div class="accordion-body">
                                                <p>Cong thanh toan dang ky </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment mt-20">
                                    <button type="submit" class="btn-tp">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- checkout-area end -->
@endsection
