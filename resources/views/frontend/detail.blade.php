@extends('frontend.layouts.main')

@section('customcss')
<link rel="stylesheet" href="{{ url('/frontend') }}/plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" href="{{ url('/frontend') }}/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" href="{{ url('/frontend') }}/styles/single_styles.css">
<link rel="stylesheet" href="{{ url('/frontend') }}/styles/single_responsive.css">
<link rel="stylesheet" href="{{ url('/frontend') }}/styles/detail.css">
<style>

/* Desktop */
.product-detail-page {
    margin-top: 10%;
}

/* Tablet */
@media (max-width: 991px) {
    .product-detail-page {
        margin-top: 14%;
    }
}

/* Mobile */
@media (max-width: 767px) {
    .product-detail-page {
        margin-top: 160px !important;
    }
}

/* Small mobile devices */
@media (max-width: 480px) {
    .product-detail-page {
        margin-top: 140px !important;
    }
}

</style>
@endsection

@section('content')
<div class="product-detail-page">
    <div class="container">

        <div class="breadcrumbs">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li><a href="{{ url('/shop') }}">Shop</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>Pocket Cotton Sweatshirt</li>
            </ul>
        </div>

        <div class="row">
            {{-- Product gallery --}}
            <div class="col-lg-7">
                <div class="product-main-card">
                    <div class="product-gallery">
                        <div class="product-thumbnails" aria-label="Product thumbnails">
                            <button type="button" class="active" data-full-image="{{ url('/frontend/images/single_1.jpg') }}">
                                <img src="{{ url('/frontend/images/single_1_thumb.jpg') }}" alt="Product view 1">
                            </button>
                            <button type="button" data-full-image="{{ url('/frontend/images/single_2.jpg') }}">
                                <img src="{{ url('/frontend/images/single_2_thumb.jpg') }}" alt="Product view 2">
                            </button>
                            <button type="button" data-full-image="{{ url('/frontend/images/single_3.jpg') }}">
                                <img src="{{ url('/frontend/images/single_3_thumb.jpg') }}" alt="Product view 3">
                            </button>
                        </div>
                        <div class="product-main-image">
                            <img id="mainProductImage" src="{{ url('/frontend/images/single_1.jpg') }}" alt="Pocket cotton sweatshirt">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Product information --}}
            <div class="col-lg-5">
                <div class="product-info-card">
                    <span class="product-kicker">New Arrival</span>
                    <h1>Pocket Cotton Sweatshirt</h1>

                    <div class="product-rating-row">
                        <span class="product-stars" aria-label="4 out of 5 stars">★★★★☆</span>
                        <span>4.0</span>
                        <span>·</span>
                        <a href="#product-reviews" class="text-muted">2 customer reviews</a>
                    </div>

                    <p class="product-short-description">
                        A comfortable everyday sweatshirt made for effortless style.
                        Designed with a clean silhouette, soft cotton feel, and a practical
                        front pocket for a relaxed casual look.
                    </p>

                    <div class="product-price-row">
                        <span class="product-current-price">$495.00</span>
                        <span class="product-old-price">$629.99</span>
                        <span class="product-discount">21% OFF</span>
                    </div>

                    <div class="product-benefits">
                        <div class="product-benefit"><i class="ti-truck"></i><span>Free delivery</span></div>
                        <div class="product-benefit"><i class="ti-reload"></i><span>Easy returns</span></div>
                        <div class="product-benefit"><i class="ti-shield"></i><span>Secure checkout</span></div>
                    </div>

                    <div class="mb-4">
                        <span class="product-option-title">Select Color</span>
                        <div class="product-colors">
                            <button type="button" class="product-color active" style="background:#e54e5d" aria-label="Red" title="Red"></button>
                            <button type="button" class="product-color" style="background:#252525" aria-label="Black" title="Black"></button>
                            <button type="button" class="product-color" style="background:#60b3f3" aria-label="Blue" title="Blue"></button>
                        </div>
                    </div>

                    <div class="product-quantity-row">
                        <div>
                            <span class="product-option-title mb-2">Quantity</span>
                            <div class="product-quantity">
                                <button type="button" id="quantityMinus" aria-label="Decrease quantity"><i class="fa fa-minus"></i></button>
                                <input type="number" id="productQuantity" name="quantity" value="1" min="1" max="99" aria-label="Quantity">
                                <button type="button" id="quantityPlus" aria-label="Increase quantity"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center flex-wrap" style="gap:10px;">
                        <a href="#" class="btn-colo-primary" id="addToCartButton">
                            <i class="fa fa-shopping-bag"></i> Add to Cart
                        </a>
                        <button type="button" class="btn-colo-wishlist" aria-label="Add to wishlist" id="wishlistButton">
                            <i class="fa fa-heart-o"></i>
                        </button>
                    </div>

                    <p class="product-stock"><i class="fa fa-check-circle"></i> In stock and ready to ship</p>

                    <div class="product-meta">
                        <div><strong>SKU:</strong> SW-POCKET-001</div>
                        <div><strong>Category:</strong> Men's Clothing, Sweatshirts</div>
                        <div><strong>Tags:</strong> Casual, Cotton, Everyday</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Product tabs --}}
        <div class="product-tabs-card">
            <ul class="nav product-detail-tabs" id="productDetailTabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#product-description" role="tab">Description</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product-information" role="tab">Additional Information</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#product-reviews" role="tab">Reviews (2)</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active product-tab-pane" id="product-description" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-7">
                            <h3>Made for everyday comfort</h3>
                            <p>
                                Keep your everyday look simple and comfortable with this pocket cotton
                                sweatshirt. Its versatile design pairs easily with jeans, joggers, or
                                casual trousers, making it a useful layer throughout the year.
                            </p>
                            <p>
                                Please check the product options and size information before ordering.
                                Product colours may look slightly different depending on your screen.
                            </p>
                        </div>
                        <div class="col-lg-5">
                            <img class="product-description-image" src="{{ url('/frontend/images/desc_1.jpg') }}" alt="Sweatshirt product detail">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade product-tab-pane" id="product-information" role="tabpanel">
                    <h3>Product details</h3>
                    <table class="product-spec-table">
                        <tr><th>Material</th><td>Cotton blend</td></tr>
                        <tr><th>Fit</th><td>Regular fit</td></tr>
                        <tr><th>Colour options</th><td>Red, Black, Blue</td></tr>
                        <tr><th>Care</th><td>Follow the garment care label</td></tr>
                        <tr><th>Style</th><td>Casual / Everyday</td></tr>
                    </table>
                </div>

                <div class="tab-pane fade product-tab-pane" id="product-reviews" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <h3>Customer reviews</h3>
                            <div class="product-review">
                                <h6>Brandon William <span class="product-stars ml-2">★★★★☆</span></h6>
                                <small>27 August 2016</small>
                                <p>Comfortable and easy to style. The overall fit works well for casual wear.</p>
                            </div>
                            <div class="product-review">
                                <h6>Verified Customer <span class="product-stars ml-2">★★★★☆</span></h6>
                                <small>Customer review</small>
                                <p>Good everyday sweatshirt with a simple design.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Write a review</h3>
                            <form class="review-form" id="reviewForm" method="POST" action="#">
                                @csrf
                                <div class="form-group">
                                    <label for="reviewName">Your name</label>
                                    <input type="text" class="form-control" id="reviewName" name="name" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group">
                                    <label for="reviewEmail">Email address</label>
                                    <input type="email" class="form-control" id="reviewEmail" name="email" placeholder="you@example.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="reviewRating">Rating</label>
                                    <select class="form-control" id="reviewRating" name="rating" required>
                                        <option value="5">5 - Excellent</option>
                                        <option value="4">4 - Very good</option>
                                        <option value="3">3 - Good</option>
                                        <option value="2">2 - Fair</option>
                                        <option value="1">1 - Poor</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="reviewMessage">Your review</label>
                                    <textarea class="form-control" id="reviewMessage" name="message" placeholder="Share your experience..." required></textarea>
                                </div>
                                <button type="submit" class="btn-colo-primary">Submit Review</button>
                                <small class="d-block text-muted mt-2">Connect this form to your review controller to save submissions.</small>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('customjs')
<script src="{{ url('/frontend') }}/plugins/jquery-ui-1.12.1.custom/jquery-ui.js">
</script>
<script src="{{ url('/frontend') }}/js/single_custom.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () 
{
    var mainImage = document.getElementById('mainProductImage');
    document.querySelectorAll('.product-thumbnails button').forEach(function (button) 
    {
        button.addEventListener('click', function () {
            var image = button.getAttribute('data-full-image');
            if (image && mainImage) mainImage.src = image;
            document.querySelectorAll('.product-thumbnails button').forEach(function (item) {
                item.classList.remove('active');
            });
            button.classList.add('active');
        });
    });

    // Quantity controls
    var quantityInput = document.getElementById('productQuantity');
    document.getElementById('quantityMinus').addEventListener('click', function () {
        quantityInput.value = Math.max(1, (parseInt(quantityInput.value, 10) || 1) - 1);
    });
    document.getElementById('quantityPlus').addEventListener('click', function () {
        quantityInput.value = Math.min(99, (parseInt(quantityInput.value, 10) || 1) + 1);
    });
    quantityInput.addEventListener('change', function () {
        var value = parseInt(quantityInput.value, 10) || 1;
        quantityInput.value = Math.min(99, Math.max(1, value));
    });

    // Colour selection UI
    document.querySelectorAll('.product-color').forEach(function (button) {
        button.addEventListener('click', function () {
            document.querySelectorAll('.product-color').forEach(function (item) {
                item.classList.remove('active');
            });
            button.classList.add('active');
        });
    });

    // Demo interactions only: connect these controls to your cart/wishlist endpoints.
    document.getElementById('addToCartButton').addEventListener('click', function (event) {
        event.preventDefault();
        alert('Connect this button to your Laravel add-to-cart route.');
    });
    document.getElementById('wishlistButton').addEventListener('click', function () {
        this.classList.toggle('active');
        this.style.color = this.classList.contains('active') ? '#ed5264' : '';
        this.innerHTML = this.classList.contains('active')
            ? '<i class="fa fa-heart"></i>'
            : '<i class="fa fa-heart-o"></i>';
    });
});
</script>
@endsection
