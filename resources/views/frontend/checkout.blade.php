
@extends('frontend.layouts.main')

@section('customcss')

    <link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/categories_styles.css">
    <link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/categories_responsive.css">
    <link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/checkout.css">
@endsection

@section('content')
<div class="checkout-page">
    <div class="container">

        {{-- Page heading --}}
        <div class="checkout-heading">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2>Checkout</h2>
                    <p>Complete your details and place your order securely.</p>
                </div>
                <div class="col-md-5">
                    <div class="checkout-breadcrumb">
                        <a href="{{ url('/') }}">Home</a>
                        &nbsp;/&nbsp;
                        <a href="{{ url('/shop') }}">Shop</a>
                        &nbsp;/&nbsp; Checkout
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ url('/checkout') }}" method="POST" id="checkoutForm">
            @csrf

            <div class="row">

                {{-- Left column: Customer and payment details --}}
                <div class="col-lg-7">

                    {{-- Customer details --}}
                    <div class="checkout-card">
                        <div class="checkout-section-title">
                            <div class="step-number">01</div>
                            <div>
                                <h4>Contact Information</h4>
                                <p>Where can we contact you?</p>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name">First Name *</label>
                                <input type="text" id="first_name"
                                       name="first_name"
                                       class="form-control"
                                       value="{{ old('first_name') }}"
                                       placeholder="Enter first name" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="last_name">Last Name *</label>
                                <input type="text" id="last_name"
                                       name="last_name"
                                       class="form-control"
                                       value="{{ old('last_name') }}"
                                       placeholder="Enter last name" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email"
                                       class="form-control"
                                       value="{{ old('email') }}"
                                       placeholder="you@example.com" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="phone">Phone Number *</label>
                                <input type="tel" id="phone" name="phone"
                                       class="form-control"
                                       value="{{ old('phone') }}"
                                       placeholder="Enter phone number"
                                       pattern="[0-9]{10}" maxlength="10"
                                       inputmode="numeric" required>
                            </div>
                        </div>
                    </div>

                    {{-- Shipping address --}}
                    <div class="checkout-card">
                        <div class="checkout-section-title">
                            <div class="step-number">02</div>
                            <div>
                                <h4>Shipping Address</h4>
                                <p>Where should we deliver your order?</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Street Address *</label>
                            <input type="text" id="address" name="address"
                                   class="form-control"
                                   value="{{ old('address') }}"
                                   placeholder="House number, street, area"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="address2">Apartment / Landmark</label>
                            <input type="text" id="address2" name="address2"
                                   class="form-control"
                                   value="{{ old('address2') }}"
                                   placeholder="Apartment, suite, landmark (optional)">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="city">City *</label>
                                <input type="text" id="city" name="city"
                                       class="form-control"
                                       value="{{ old('city') }}"
                                       placeholder="Enter city" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="state">State *</label>
                                <input type="text" id="state" name="state"
                                       class="form-control"
                                       value="{{ old('state') }}"
                                       placeholder="Enter state" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="pincode">PIN Code *</label>
                                <input type="text" id="pincode" name="pincode"
                                       class="form-control"
                                       value="{{ old('pincode') }}"
                                       placeholder="6-digit PIN code"
                                       pattern="[0-9]{6}" maxlength="6"
                                       inputmode="numeric" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="country">Country *</label>
                                <select id="country" name="country"
                                        class="form-control" required>
                                    <option value="India"
                                        {{ old('country', 'India') == 'India' ? 'selected' : '' }}>
                                        India
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <label for="notes">Order Notes</label>
                            <textarea id="notes" name="notes"
                                      class="form-control"
                                      placeholder="Delivery instructions or other notes (optional)">{{ old('notes') }}</textarea>
                        </div>
                    </div>

                    {{-- Payment --}}
                    <div class="checkout-card">
                        <div class="checkout-section-title">
                            <div class="step-number">03</div>
                            <div>
                                <h4>Payment Method</h4>
                                <p>Choose how you would like to pay.</p>
                            </div>
                        </div>

                        <label class="payment-option">
                            <input type="radio" name="payment_method"
                                   value="cod"
                                   {{ old('payment_method', 'cod') == 'cod' ? 'checked' : '' }}
                                   required>
                            <span>
                                <strong>Cash on Delivery</strong>
                                <small>Pay when your order arrives at your doorstep.</small>
                            </span>
                        </label>

                        <label class="payment-option">
                            <input type="radio" name="payment_method"
                                   value="online"
                                   {{ old('payment_method') == 'online' ? 'checked' : '' }}>
                            <span>
                                <strong>Online Payment</strong>
                                <small>Pay securely using the online payment gateway.</small>
                            </span>
                        </label>

                        <p class="checkout-terms mt-3 mb-0">
                            By placing your order, you agree to our
                            <a href="#">Terms and Conditions</a> and
                            <a href="#">Privacy Policy</a>.
                        </p>
                    </div>
                </div>

                {{-- Right column: Order summary --}}
                <div class="col-lg-5">
                    <div class="checkout-card order-summary">

                        <div class="order-summary-header">
                            <h4>Your Order</h4>
                            <span class="item-count">2 Items</span>
                        </div>

                        {{-- Sample cart item 1 --}}
                        <div class="checkout-product">
                            <div class="checkout-product-image">
                                <img src="{{ asset('frontend/images/product_1.png') }}"
                                     alt="Product">
                            </div>
                            <div class="checkout-product-info">
                                <h6>Fujifilm X100T Digital Camera</h6>
                                <small>Quantity: 1</small>
                            </div>
                            <div class="checkout-product-price">₹520.00</div>
                        </div>

                        {{-- Sample cart item 2 --}}
                        <div class="checkout-product">
                            <div class="checkout-product-image">
                                <img src="{{ asset('frontend/images/product_2.png') }}"
                                     alt="Product">
                            </div>
                            <div class="checkout-product-info">
                                <h6>Samsung Curved Monitor</h6>
                                <small>Quantity: 1</small>
                            </div>
                            <div class="checkout-product-price">₹610.00</div>
                        </div>

                        <hr class="summary-divider">

                        <div class="summary-line">
                            <span>Subtotal</span>
                            <strong>₹1,130.00</strong>
                        </div>

                        <div class="summary-line">
                            <span>Shipping</span>
                            <strong class="text-success">Free</strong>
                        </div>

                        <div class="summary-line">
                            <span>Tax</span>
                            <strong>₹0.00</strong>
                        </div>

                        <hr class="summary-divider">

                        <div class="summary-total">
                            <span>Total Amount</span>
                            <strong>₹1,130.00</strong>
                        </div>

                        <button type="submit" class="btn btn-place-order">
                            Place Order <i class="fa fa-arrow-right"></i>
                        </button>

                        <div class="checkout-security">
                            <i class="fa fa-lock"></i>
                            Your information is protected.<br>
                            Payments are processed through your configured payment provider.
                        </div>

                        <div class="text-center">
                            <a href="{{ url('/shop') }}" class="checkout-back">
                                <i class="fa fa-arrow-left"></i>
                                Continue Shopping
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection
