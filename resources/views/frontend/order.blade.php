@extends('frontend.layouts.main')
@section('customcss')
    <link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/categories_styles.css">
    <link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/myorder.css">
@endsection

@section('content')
<section class="orders-page">

    <div class="container">

        <!-- =========================
             PAGE HEADER
        ========================== -->
        <div class="orders-header text-center">

            <span>MY ACCOUNT</span>

            <h1>My Orders</h1>

            <div class="orders-title-line"></div>

            <p>
                View and manage your recent orders
            </p>

        </div>


        <div class="row">

            <!-- =========================
                 ORDER LIST
            ========================== -->
            <div class="col-lg-8">

                <!-- ORDER 1 -->
                <div class="order-card">

                    <!-- Order Header -->
                    <div class="order-top">

                        <div>

                            <span class="order-label">
                                ORDER NUMBER
                            </span>

                            <h5>
                                #ORD-10245
                            </h5>

                            <small>
                                Placed on 01 October 2026
                            </small>

                        </div>


                        <div class="text-right">

                            <span class="order-label">
                                ORDER TOTAL
                            </span>

                            <strong class="order-total">
                                $1,250.00
                            </strong>

                        </div>

                    </div>


                    <!-- Status -->
                    <div class="order-status-row">

                        <span class="order-status delivered">
                            <i class="fa fa-check-circle"></i>
                            Delivered
                        </span>

                        <span class="payment-status">
                            <i class="fa fa-credit-card"></i>
                            Paid
                        </span>

                    </div>


                    <!-- Products -->
                    <div class="order-products">

                        <!-- Product -->
                        <div class="order-product">

                            <div class="order-product-image">

                                <img
                                    src="frontend/images/product_1.png"
                                    alt="Fujifilm Camera">

                            </div>


                            <div class="order-product-info">

                                <span>
                                    Camera
                                </span>

                                <h6>
                                    Fujifilm X100T 16 MP
                                    Digital Camera
                                </h6>

                                <p>
                                    Quantity: <strong>1</strong>
                                </p>

                            </div>


                            <div class="order-product-price">
                                $520.00
                            </div>

                        </div>


                        <!-- Product -->
                        <div class="order-product">

                            <div class="order-product-image">

                                <img
                                    src="frontend/images/product_3.png"
                                    alt="Blue Yeti">

                            </div>


                            <div class="order-product-info">

                                <span>
                                    Audio
                                </span>

                                <h6>
                                    Blue Yeti USB Microphone
                                </h6>

                                <p>
                                    Quantity: <strong>1</strong>
                                </p>

                            </div>


                            <div class="order-product-price">
                                $120.00
                            </div>

                        </div>

                    </div>


                    <!-- Order Footer -->
                    <div class="order-footer">

                        <a href="#" class="order-btn view-btn">
                            <i class="fa fa-eye"></i>
                            View Order
                        </a>

                        <a href="#" class="order-btn reorder-btn">
                            <i class="fa fa-refresh"></i>
                            Reorder
                        </a>

                    </div>

                </div>



                <!-- ORDER 2 -->
                <div class="order-card">

                    <div class="order-top">

                        <div>

                            <span class="order-label">
                                ORDER NUMBER
                            </span>

                            <h5>
                                #ORD-10244
                            </h5>

                            <small>
                                Placed on 28 September 2026
                            </small>

                        </div>


                        <div class="text-right">

                            <span class="order-label">
                                ORDER TOTAL
                            </span>

                            <strong class="order-total">
                                $790.00
                            </strong>

                        </div>

                    </div>


                    <div class="order-status-row">

                        <span class="order-status shipped">
                            <i class="fa fa-truck"></i>
                            Shipped
                        </span>

                        <span class="payment-status">
                            <i class="fa fa-credit-card"></i>
                            Paid
                        </span>

                    </div>


                    <div class="order-products">

                        <div class="order-product">

                            <div class="order-product-image">

                                <img
                                    src="frontend/images/product_2.png"
                                    alt="Monitor">

                            </div>


                            <div class="order-product-info">

                                <span>
                                    Electronics
                                </span>

                                <h6>
                                    Samsung CF591 Curved Monitor
                                </h6>

                                <p>
                                    Quantity: <strong>1</strong>
                                </p>

                            </div>


                            <div class="order-product-price">
                                $610.00
                            </div>

                        </div>


                        <div class="order-product">

                            <div class="order-product-image">

                                <img
                                    src="frontend/images/product_5.png"
                                    alt="Headphones">

                            </div>


                            <div class="order-product-info">

                                <span>
                                    Headphones
                                </span>

                                <h6>
                                    Pryma Headphones
                                </h6>

                                <p>
                                    Quantity: <strong>1</strong>
                                </p>

                            </div>


                            <div class="order-product-price">
                                $180.00
                            </div>

                        </div>

                    </div>


                    <div class="order-footer">

                        <a href="#" class="order-btn view-btn">
                            <i class="fa fa-eye"></i>
                            View Order
                        </a>

                        <a href="#" class="order-btn reorder-btn">
                            <i class="fa fa-refresh"></i>
                            Reorder
                        </a>

                        <a href="#" class="order-btn cancel-btn">
                            <i class="fa fa-times"></i>
                            Cancel
                        </a>

                    </div>

                </div>



                <!-- ORDER 3 -->
                <div class="order-card">

                    <div class="order-top">

                        <div>

                            <span class="order-label">
                                ORDER NUMBER
                            </span>

                            <h5>
                                #ORD-10243
                            </h5>

                            <small>
                                Placed on 25 September 2026
                            </small>

                        </div>


                        <div class="text-right">

                            <span class="order-label">
                                ORDER TOTAL
                            </span>

                            <strong class="order-total">
                                $410.00
                            </strong>

                        </div>

                    </div>


                    <div class="order-status-row">

                        <span class="order-status processing">
                            <i class="fa fa-clock-o"></i>
                            Processing
                        </span>

                        <span class="payment-status">
                            <i class="fa fa-credit-card"></i>
                            Paid
                        </span>

                    </div>


                    <div class="order-products">

                        <div class="order-product">

                            <div class="order-product-image">

                                <img
                                    src="frontend/images/product_4.png"
                                    alt="Printer">

                            </div>


                            <div class="order-product-info">

                                <span>
                                    Accessories
                                </span>

                                <h6>
                                    DYMO LabelWriter 450 Turbo
                                </h6>

                                <p>
                                    Quantity: <strong>1</strong>
                                </p>

                            </div>


                            <div class="order-product-price">
                                $410.00
                            </div>

                        </div>

                    </div>


                    <div class="order-footer">

                        <a href="#" class="order-btn view-btn">
                            <i class="fa fa-eye"></i>
                            View Order
                        </a>

                        <a href="#" class="order-btn cancel-btn">
                            <i class="fa fa-times"></i>
                            Cancel Order
                        </a>

                    </div>

                </div>

            </div>



            <!-- =========================
                 RIGHT SIDEBAR
            ========================== -->
            <div class="col-lg-4">

                <!-- Account -->
                <div class="account-box">

                    <h4>
                        My Account
                    </h4>

                    <div class="account-user">

                        <div class="user-avatar">
                            <i class="fa fa-user"></i>
                        </div>

                        <div>

                            <strong>
                                Welcome Back!
                            </strong>

                            <span>
                                Manage your account
                            </span>

                        </div>

                    </div>


                    <ul class="account-links">

                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                My Profile
                            </a>
                        </li>

                        <li class="active">
                            <a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                My Orders
                                <span>3</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                Wishlist
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-map-marker"></i>
                                Addresses
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-lock"></i>
                                Change Password
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-sign-out"></i>
                                Logout
                            </a>
                        </li>

                    </ul>

                </div>


                <!-- Need Help -->
                <div class="order-help">

                    <div class="help-icon">
                        <i class="fa fa-headphones"></i>
                    </div>

                    <div>

                        <h5>
                            Need Help?
                        </h5>

                        <p>
                            Have questions about your order?
                        </p>

                        <a href="#">
                            Contact Support
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
@endsection