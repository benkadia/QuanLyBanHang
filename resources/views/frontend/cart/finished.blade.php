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
                                    <li class="breadcrumb-item active" aria-current="page">Cheakout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page__title-end -->
    <!-- checkout-area start -->
    <section class="checkout-area pb-85">
        <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkbox-form">
                                Cảm ơn bạn đã đặt hàng, vui lòng kiểm tra chi tiết đơn hàng trong email.
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
                                        @foreach ($items as $item)
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{ $item->product->name }} <strong class="product-quantity"> ×
                                                        {{ number_format($item->qty) }}</strong>
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
                                                    class="amount">{{ number_format($items->sum('totalamount')) }}</span>
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
                                                        class="amount">{{ number_format($items->sum('totalamount')) }}</span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- checkout-area end -->
@endsection
