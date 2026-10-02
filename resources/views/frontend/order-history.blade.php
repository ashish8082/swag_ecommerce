@extends('frontend.layouts.main')
@section('customcss')

	<link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/order_history.css">
@endsection
@section('content')
<section class="view-order-page">

    <div class="container">

        <!-- ==========================================
             TOP HEADER
        =========================================== -->
        <div class="vo-page-header">

            <div>

                <span class="vo-eyebrow">
                    MY ORDERS
                </span>

                <h1>
                    Order Details
                </h1>

                <p>
                    Order <strong>#ORD-10245</strong>
                    &nbsp;•&nbsp;
                    Placed on 01 October 2026
                </p>

            </div>


            <div class="vo-header-actions">

                <a href="{{ url('/orders') }}"
                   class="vo-back-btn">

                    <i class="fa fa-angle-left"></i>

                    Back to Orders

                </a>

                <a href="#"
                   class="vo-invoice-btn">

                    <i class="fa fa-file-pdf-o"></i>

                    Invoice

                </a>

            </div>

        </div>


        <!-- ==========================================
             ORDER STATUS
        =========================================== -->
        <div class="vo-status-card">

            <div class="vo-status-top">

                <div>

                    <span class="vo-status-label">
                        ORDER STATUS
                    </span>

                    <h4>
                        Delivered Successfully
                    </h4>

                </div>

                <span class="vo-delivered-badge">
                    <i class="fa fa-check-circle"></i>
                    Delivered
                </span>

            </div>


            <!-- Timeline -->
            <div class="vo-timeline">

                <!-- Step 1 -->
                <div class="vo-step completed">

                    <div class="vo-step-icon">
                        <i class="fa fa-shopping-bag"></i>
                    </div>

                    <div class="vo-step-content">

                        <strong>
                            Order Placed
                        </strong>

                        <span>
                            01 Oct 2026
                        </span>

                    </div>

                </div>


                <div class="vo-timeline-line completed"></div>


                <!-- Step 2 -->
                <div class="vo-step completed">

                    <div class="vo-step-icon">
                        <i class="fa fa-check"></i>
                    </div>

                    <div class="vo-step-content">

                        <strong>
                            Confirmed
                        </strong>

                        <span>
                            01 Oct 2026
                        </span>

                    </div>

                </div>


                <div class="vo-timeline-line completed"></div>


                <!-- Step 3 -->
                <div class="vo-step completed">

                    <div class="vo-step-icon">
                        <i class="fa fa-truck"></i>
                    </div>

                    <div class="vo-step-content">

                        <strong>
                            Shipped
                        </strong>

                        <span>
                            02 Oct 2026
                        </span>

                    </div>

                </div>


                <div class="vo-timeline-line completed"></div>


                <!-- Step 4 -->
                <div class="vo-step completed">

                    <div class="vo-step-icon">
                        <i class="fa fa-home"></i>
                    </div>

                    <div class="vo-step-content">

                        <strong>
                            Delivered
                        </strong>

                        <span>
                            04 Oct 2026
                        </span>

                    </div>

                </div>

            </div>

        </div>



        <div class="row">

            <!-- ==========================================
                 LEFT COLUMN
            =========================================== -->
            <div class="col-lg-8">


                <!-- ======================================
                     PRODUCTS
                ======================================= -->
                <div class="vo-card">

                    <div class="vo-card-header">

                        <div>

                            <span>
                                ORDER ITEMS
                            </span>

                            <h3>
                                Products
                            </h3>

                        </div>

                        <strong>
                            3 Items
                        </strong>

                    </div>


                    <div class="vo-products">


                        <!-- Product 1 -->
                        <div class="vo-product">

                            <div class="vo-product-image">

                                <img
                                    src="frontend/images/product_1.png"
                                    alt="Fujifilm Camera">

                            </div>


                            <div class="vo-product-info">

                                <span>
                                    CAMERA
                                </span>

                                <h5>
                                    Fujifilm X100T 16 MP
                                    Digital Camera
                                </h5>

                                <p>
                                    Silver
                                </p>

                                <div class="vo-product-meta">

                                    <span>
                                        Quantity: <strong>1</strong>
                                    </span>

                                    <span>
                                        Price: <strong>$520.00</strong>
                                    </span>

                                </div>

                            </div>


                            <div class="vo-product-total">
                                $520.00
                            </div>

                        </div>


                        <!-- Product 2 -->
                        <div class="vo-product">

                            <div class="vo-product-image">

                                <img
                                    src="frontend/images/product_3.png"
                                    alt="Blue Yeti">

                            </div>


                            <div class="vo-product-info">

                                <span>
                                    AUDIO
                                </span>

                                <h5>
                                    Blue Yeti USB Microphone
                                </h5>

                                <p>
                                    Blackout Edition
                                </p>

                                <div class="vo-product-meta">

                                    <span>
                                        Quantity: <strong>2</strong>
                                    </span>

                                    <span>
                                        Price: <strong>$120.00</strong>
                                    </span>

                                </div>

                            </div>


                            <div class="vo-product-total">
                                $240.00
                            </div>

                        </div>


                        <!-- Product 3 -->
                        <div class="vo-product">

                            <div class="vo-product-image">

                                <img
                                    src="frontend/images/product_5.png"
                                    alt="Pryma Headphones">

                            </div>


                            <div class="vo-product-info">

                                <span>
                                    HEADPHONES
                                </span>

                                <h5>
                                    Pryma Headphones,
                                    Rose Gold & Grey
                                </h5>

                                <p>
                                    Rose Gold
                                </p>

                                <div class="vo-product-meta">

                                    <span>
                                        Quantity: <strong>1</strong>
                                    </span>

                                    <span>
                                        Price: <strong>$180.00</strong>
                                    </span>

                                </div>

                            </div>


                            <div class="vo-product-total">
                                $180.00
                            </div>

                        </div>

                    </div>

                </div>



                <!-- ======================================
                     SHIPPING ADDRESS
                ======================================= -->
                <div class="vo-card">

                    <div class="vo-card-header">

                        <div>

                            <span>
                                DELIVERY
                            </span>

                            <h3>
                                Shipping Address
                            </h3>

                        </div>

                        <i class="fa fa-map-marker vo-header-icon"></i>

                    </div>


                    <div class="vo-address">

                        <div class="vo-address-icon">

                            <i class="fa fa-home"></i>

                        </div>


                        <div>

                            <h5>
                                Ashish Yadav
                            </h5>

                            <p>
                                123 Main Street, Near City Mall
                            </p>

                            <p>
                                Mumbai, Maharashtra - 400001
                            </p>

                            <p>
                                India
                            </p>

                            <span>
                                <i class="fa fa-phone"></i>
                                +91 XXXXX XXXXX
                            </span>

                        </div>

                    </div>

                </div>



                <!-- ======================================
                     PAYMENT
                ======================================= -->
                <div class="vo-card">

                    <div class="vo-card-header">

                        <div>

                            <span>
                                PAYMENT
                            </span>

                            <h3>
                                Payment Information
                            </h3>

                        </div>

                        <span class="vo-paid-badge">
                            <i class="fa fa-check"></i>
                            Paid
                        </span>

                    </div>


                    <div class="vo-payment">

                        <div class="vo-payment-method">

                            <div class="vo-payment-icon">
                                <i class="fa fa-credit-card"></i>
                            </div>

                            <div>

                                <span>
                                    PAYMENT METHOD
                                </span>

                                <strong>
                                    Credit / Debit Card
                                </strong>

                            </div>

                        </div>


                        <div class="vo-payment-details">

                            <div>

                                <span>
                                    TRANSACTION ID
                                </span>

                                <strong>
                                    TXN98237461
                                </strong>

                            </div>

                            <div>

                                <span>
                                    PAYMENT DATE
                                </span>

                                <strong>
                                    01 Oct 2026
                                </strong>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- ==========================================
                 RIGHT COLUMN
            =========================================== -->
            <div class="col-lg-4">


                <!-- ======================================
                     ORDER SUMMARY
                ======================================= -->
                <div class="vo-summary">

                    <div class="vo-summary-header">

                        <span>
                            ORDER SUMMARY
                        </span>

                        <h3>
                            Payment Details
                        </h3>

                    </div>


                    <div class="vo-summary-row">

                        <span>
                            Subtotal
                        </span>

                        <strong>
                            $940.00
                        </strong>

                    </div>


                    <div class="vo-summary-row">

                        <span>
                            Shipping
                        </span>

                        <strong>
                            $15.00
                        </strong>

                    </div>


                    <div class="vo-summary-row">

                        <span>
                            Discount
                        </span>

                        <strong class="vo-discount">
                            -$20.00
                        </strong>

                    </div>


                    <div class="vo-summary-divider"></div>


                    <div class="vo-total-row">

                        <span>
                            Total
                        </span>

                        <strong>
                            $935.00
                        </strong>

                    </div>


                    <div class="vo-secure">

                        <i class="fa fa-lock"></i>

                        Secure payment

                    </div>

                </div>



                <!-- ======================================
                     DELIVERY INFO
                ======================================= -->
                <div class="vo-info-card">

                    <div class="vo-info-icon">
                        <i class="fa fa-truck"></i>
                    </div>

                    <div>

                        <h5>
                            Delivery Information
                        </h5>

                        <p>
                            Your order was delivered
                            successfully.
                        </p>

                        <strong>
                            Delivered on 04 Oct 2026
                        </strong>

                    </div>

                </div>



                <!-- ======================================
                     ACTIONS
                ======================================= -->
                <div class="vo-actions">

                    <a href="#" class="vo-action primary">

                        <i class="fa fa-refresh"></i>

                        Reorder

                    </a>


                    <a href="#" class="vo-action">

                        <i class="fa fa-file-pdf-o"></i>

                        Download Invoice

                    </a>

                </div>


                <!-- Help -->
                <div class="vo-help">

                    <div class="vo-help-icon">
                        <i class="fa fa-headphones"></i>
                    </div>

                    <div>

                        <h5>
                            Need Help?
                        </h5>

                        <p>
                            Questions about this order?
                        </p>

                        <a href="#">
                            Contact Support
                            <i class="fa fa-angle-right"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
@endsection