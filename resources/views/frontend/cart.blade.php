@extends('frontend.layouts.main')
@section('customcss')
    <link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/categories_styles.css">
    <link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/categories_responsive.css">
    <link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/cart.css">
@endsection
@section('content')
<section class="cart-page">
    <div class="container">

        <!-- Page Heading -->
        <div class="cart-header text-center">
            <span>SHOPPING CART</span>
            <h1>Your Cart</h1>
            <div class="cart-title-line"></div>
        </div>


        <div class="row">

            <!-- =========================
                 CART PRODUCTS
            ========================== -->
            <div class="col-lg-8 mb-4">

                <div class="cart-products">

                    <!-- Cart Header -->
                    <div class="cart-list-header d-none d-md-flex">

                        <div class="cart-product-heading">
                            Product
                        </div>

                        <div class="cart-price-heading">
                            Price
                        </div>

                        <div class="cart-quantity-heading">
                            Quantity
                        </div>

                        <div class="cart-total-heading">
                            Total
                        </div>

                    </div>


                    <!-- PRODUCT 1 -->
                    <div class="cart-item">

                        <!-- Product -->
                        <div class="cart-product">

                            <div class="cart-product-image">
                                <img
                                    src="frontend/images/product_1.png"
                                    alt="Fujifilm Camera">
                            </div>

                            <div class="cart-product-info">

                                <span>
                                    Camera
                                </span>

                                <h5>
                                    <a href="#">
                                        Fujifilm X100T 16 MP
                                        Digital Camera
                                    </a>
                                </h5>

                                <small>
                                    Silver
                                </small>

                            </div>

                        </div>


                        <!-- Price -->
                        <div class="cart-price">

                            <span class="mobile-label">
                                Price
                            </span>

                            <strong>
                                $520.00
                            </strong>

                        </div>


                        <!-- Quantity -->
                        <div class="cart-quantity">

                            <span class="mobile-label">
                                Quantity
                            </span>

                            <div class="quantity-box">

                                <button type="button">
                                    <i class="fa fa-minus"></i>
                                </button>

                                <input
                                    type="text"
                                    value="1"
                                    readonly>

                                <button type="button">
                                    <i class="fa fa-plus"></i>
                                </button>

                            </div>

                        </div>


                        <!-- Total -->
                        <div class="cart-item-total">

                            <span class="mobile-label">
                                Total
                            </span>

                            <strong>
                                $520.00
                            </strong>

                        </div>


                        <!-- Remove -->
                        <button class="remove-cart">
                            <i class="fa fa-trash-o"></i>
                        </button>

                    </div>



                    <!-- PRODUCT 2 -->
                    <div class="cart-item">

                        <div class="cart-product">

                            <div class="cart-product-image">
                                <img
                                    src="frontend/images/product_2.png"
                                    alt="Samsung Monitor">
                            </div>

                            <div class="cart-product-info">

                                <span>
                                    Electronics
                                </span>

                                <h5>
                                    <a href="#">
                                        Samsung CF591 Series
                                        Curved Monitor
                                    </a>
                                </h5>

                                <small>
                                    27-Inch FHD
                                </small>

                            </div>

                        </div>


                        <div class="cart-price">

                            <span class="mobile-label">
                                Price
                            </span>

                            <strong>
                                $610.00
                            </strong>

                        </div>


                        <div class="cart-quantity">

                            <span class="mobile-label">
                                Quantity
                            </span>

                            <div class="quantity-box">

                                <button type="button">
                                    <i class="fa fa-minus"></i>
                                </button>

                                <input
                                    type="text"
                                    value="1"
                                    readonly>

                                <button type="button">
                                    <i class="fa fa-plus"></i>
                                </button>

                            </div>

                        </div>


                        <div class="cart-item-total">

                            <span class="mobile-label">
                                Total
                            </span>

                            <strong>
                                $610.00
                            </strong>

                        </div>


                        <button class="remove-cart">
                            <i class="fa fa-trash-o"></i>
                        </button>

                    </div>



                    <!-- PRODUCT 3 -->
                    <div class="cart-item">

                        <div class="cart-product">

                            <div class="cart-product-image">
                                <img
                                    src="frontend/images/product_3.png"
                                    alt="Blue Yeti Microphone">
                            </div>

                            <div class="cart-product-info">

                                <span>
                                    Audio
                                </span>

                                <h5>
                                    <a href="#">
                                        Blue Yeti USB
                                        Microphone
                                    </a>
                                </h5>

                                <small>
                                    Blackout Edition
                                </small>

                            </div>

                        </div>


                        <div class="cart-price">

                            <span class="mobile-label">
                                Price
                            </span>

                            <strong>
                                $120.00
                            </strong>

                        </div>


                        <div class="cart-quantity">

                            <span class="mobile-label">
                                Quantity
                            </span>

                            <div class="quantity-box">

                                <button type="button">
                                    <i class="fa fa-minus"></i>
                                </button>

                                <input
                                    type="text"
                                    value="2"
                                    readonly>

                                <button type="button">
                                    <i class="fa fa-plus"></i>
                                </button>

                            </div>

                        </div>


                        <div class="cart-item-total">

                            <span class="mobile-label">
                                Total
                            </span>

                            <strong>
                                $240.00
                            </strong>

                        </div>


                        <button class="remove-cart">
                            <i class="fa fa-trash-o"></i>
                        </button>

                    </div>


                    <!-- Cart Actions -->
                    <div class="cart-actions">

                        <a href="/" class="continue-shopping">
                            <i class="fa fa-angle-left"></i>
                            Continue Shopping
                        </a>

                        <button class="update-cart">
                            Update Cart
                        </button>

                    </div>

                </div>

            </div>



            <!-- =========================
                 CART SUMMARY
            ========================== -->
            <div class="col-lg-4">

                <div class="cart-summary">

                    <h3>
                        Cart Summary
                    </h3>


                    <!-- Coupon -->
                    <div class="coupon-box">

                        <label>
                            Have a coupon?
                        </label>

                        <div class="coupon-form">

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Coupon code">

                            <button>
                                Apply
                            </button>

                        </div>

                    </div>


                    <div class="summary-divider"></div>


                    <!-- Summary -->
                    <div class="summary-row">

                        <span>
                            Subtotal
                        </span>

                        <strong>
                            $1,370.00
                        </strong>

                    </div>


                    <div class="summary-row">

                        <span>
                            Shipping
                        </span>

                        <strong>
                            $15.00
                        </strong>

                    </div>


                    <div class="summary-row">

                        <span>
                            Discount
                        </span>

                        <strong class="discount-price">
                            -$20.00
                        </strong>

                    </div>


                    <div class="summary-divider"></div>


                    <!-- Grand Total -->
                    <div class="summary-total">

                        <span>
                            Total
                        </span>

                        <strong>
                            $1,365.00
                        </strong>

                    </div>


                    <!-- Checkout -->
                    <a href="{{url('/checkout')}}" class="checkout-btn">
                        Proceed to Checkout
                        <i class="fa fa-arrow-right"></i>
                    </a>


                    <!-- Secure -->
                    <div class="secure-payment">

                        <i class="fa fa-lock"></i>

                        <span>
                            Secure & Safe Checkout
                        </span>

                    </div>

                </div>


                <!-- Benefits -->
                <div class="cart-benefits">

                    <div class="benefit-item">

                        <i class="fa fa-truck"></i>

                        <div>
                            <strong>
                                Free Shipping
                            </strong>

                            <span>
                                On orders over $100
                            </span>
                        </div>

                    </div>


                    <div class="benefit-item">

                        <i class="fa fa-refresh"></i>

                        <div>
                            <strong>
                                Easy Returns
                            </strong>

                            <span>
                                30 days return policy
                            </span>
                        </div>

                    </div>


                    <div class="benefit-item">

                        <i class="fa fa-shield"></i>

                        <div>
                            <strong>
                                Secure Payment
                            </strong>

                            <span>
                                100% secure payment
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
@endsection