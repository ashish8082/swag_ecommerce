@extends('frontend.layouts.main')
@section('customcss')
    <link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/categories_styles.css">
    <link rel="stylesheet" type="text/css" href="{{url('/frontend')}}/styles/categories_responsive.css">

@endsection
@section('content')

<div class="container-fluid shop-page">
    <div class="shop-breadcrumb d-flex justify-content-between align-items-center">
        <h4>Shop</h4>
        <div><a href="{{ url('/') }}">Home</a> / <span>Shop</span></div>
    </div>

    <div class="row shop-layout">
        {{-- Sidebar --}}
        <aside class="col-lg-3 col-xl-2">
            <div class="shop-sidebar">
                <h5>Filter by Category</h5>

                <ul class="category-list">
                    <li><a href="{{ url('/shop') }}"><i class="fa fa-th-large"></i> All</a></li>
                    <li><a href="#"><i class="fa fa-female"></i> Fashion</a></li>
                    <li><a href="#"><i class="fa fa-book"></i> Books</a></li>
                    <li><a href="#"><i class="fa fa-gamepad"></i> Toys</a></li>
                    <li><a href="#"><i class="fa fa-laptop"></i> Electronics</a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag"></i> Accessories</a></li>
                </ul>

                <hr>

                <h5>Sort By</h5>
                <ul class="category-list">
                    <li><a href="#" class="sort-products" data-sort="default">
                        <i class="fa fa-clock-o"></i> Newest
                    </a></li>
                    <li><a href="#" class="sort-products" data-sort="high">
                        <i class="fa fa-sort-amount-desc"></i> Price: High-Low
                    </a></li>
                    <li><a href="#" class="sort-products" data-sort="low">
                        <i class="fa fa-sort-amount-asc"></i> Price: Low-High
                    </a></li>
                </ul>

                <hr>

                <h5>Filter by Price</h5>
                <input type="number" id="minPrice" class="form-control mb-2"
                       placeholder="Minimum price" min="0">
                <input type="number" id="maxPrice" class="form-control mb-3"
                       placeholder="Maximum price" min="0">
                <button type="button" id="filterPrice" class="btn btn-dark btn-block">
                    Apply Filter
                </button>
                <button type="button" id="resetFilters"
                        class="btn btn-outline-secondary btn-block">
                    Reset Filters
                </button>
            </div>
        </aside>

        {{-- Products --}}
        <main class="col-lg-9 col-xl-10">
            <div class="products-panel">
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                    <h4 class="mb-3 mb-md-0">Products</h4>

                    <div class="shop-search">
                        <i class="fa fa-search"></i>
                        <input type="text" id="productSearch"
                               placeholder="Search Product">
                    </div>
                </div>

                <div class="row" id="productGrid">

                    {{-- Product 1 --}}
                    <div class="col-12 col-sm-6 col-xl-4 product-column"
                         data-name="Fujifilm Camera" data-price="520">
                        <div class="shop-product-card">
                            <div class="shop-product-image">
                                <span class="product-badge">SALE</span>
                                <a href="{{ url('/product-detail', 1) }}">
                                    <img src="{{ url('/frontend/images/product_1.png') }}"
                                         alt="Fujifilm Camera">
                                </a>
                                <button class="quick-cart" type="button"
                                        onclick="window.location.href='{{ url('/product-detail', 1) }}'"
                                        aria-label="View camera">
                                    <i class="fa fa-shopping-basket"></i>
                                </button>
                            </div>
                            <div class="shop-product-info">
                                <h6><a href="{{ url('/product-detail', 1) }}">
                                    Fujifilm X100T Camera
                                </a></h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="product-price">$520
                                        <del>$590</del>
                                    </div>
                                    <div class="product-rating">★★★★★</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Product 2 --}}
                    <div class="col-12 col-sm-6 col-xl-4 product-column"
                         data-name="Samsung Monitor" data-price="610">
                        <div class="shop-product-card">
                            <div class="shop-product-image">
                                <span class="product-badge badge-new">NEW</span>
                                <a href="single.html">
                                    <img src="{{ url('/frontend/images/product_2.png') }}"
                                         alt="Samsung Monitor">
                                </a>
                                <button class="quick-cart" type="button"
                                        onclick="window.location.href='single.html'"
                                        aria-label="View monitor">
                                    <i class="fa fa-shopping-basket"></i>
                                </button>
                            </div>
                            <div class="shop-product-info">
                                <h6><a href="single.html">
                                    Samsung Curved Monitor
                                </a></h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="product-price">$610</div>
                                    <div class="product-rating">★★★★★</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Product 3 --}}
                    <div class="col-12 col-sm-6 col-xl-4 product-column"
                         data-name="Blue Yeti Microphone" data-price="120">
                        <div class="shop-product-card">
                            <div class="shop-product-image">
                                <a href="single.html">
                                    <img src="{{ url('/frontend/images/product_3.png') }}"
                                         alt="Blue Yeti Microphone">
                                </a>
                                <button class="quick-cart" type="button"
                                        onclick="window.location.href='single.html'"
                                        aria-label="View microphone">
                                    <i class="fa fa-shopping-basket"></i>
                                </button>
                            </div>
                            <div class="shop-product-info">
                                <h6><a href="single.html">
                                    Blue Yeti USB Microphone
                                </a></h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="product-price">$120</div>
                                    <div class="product-rating">★★★★★</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Product 4 --}}
                    <div class="col-12 col-sm-6 col-xl-4 product-column"
                         data-name="DYMO LabelWriter" data-price="410">
                        <div class="shop-product-card">
                            <div class="shop-product-image">
                                <span class="product-badge">SALE</span>
                                <a href="single.html">
                                    <img src="{{ url('/frontend/images/product_4.png') }}"
                                         alt="DYMO LabelWriter">
                                </a>
                                <button class="quick-cart" type="button"
                                        onclick="window.location.href='single.html'"
                                        aria-label="View printer">
                                    <i class="fa fa-shopping-basket"></i>
                                </button>
                            </div>
                            <div class="shop-product-info">
                                <h6><a href="single.html">
                                    DYMO LabelWriter Printer
                                </a></h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="product-price">$410</div>
                                    <div class="product-rating">★★★★★</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Product 5 --}}
                    <div class="col-12 col-sm-6 col-xl-4 product-column"
                         data-name="Pryma Headphones" data-price="180">
                        <div class="shop-product-card">
                            <div class="shop-product-image">
                                <a href="single.html">
                                    <img src="{{ url('/frontend/images/product_5.png') }}"
                                         alt="Pryma Headphones">
                                </a>
                                <button class="quick-cart" type="button"
                                        onclick="window.location.href='single.html'"
                                        aria-label="View headphones">
                                    <i class="fa fa-shopping-basket"></i>
                                </button>
                            </div>
                            <div class="shop-product-info">
                                <h6><a href="single.html">
                                    Pryma Headphones
                                </a></h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="product-price">$180</div>
                                    <div class="product-rating">★★★★★</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Product 6 --}}
                    <div class="col-12 col-sm-6 col-xl-4 product-column"
                         data-name="Camera Accessories" data-price="250">
                        <div class="shop-product-card">
                            <div class="shop-product-image">
                                <a href="single.html">
                                    <img src="{{ url('/frontend/images/product_6.png') }}"
                                         alt="Camera Accessories">
                                </a>
                                <button class="quick-cart" type="button"
                                        onclick="window.location.href='single.html'"
                                        aria-label="View accessories">
                                    <i class="fa fa-shopping-basket"></i>
                                </button>
                            </div>
                            <div class="shop-product-info">
                                <h6><a href="single.html">
                                    Camera Accessories
                                </a></h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="product-price">$250</div>
                                    <div class="product-rating">★★★★★</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="noProducts" class="text-center py-5" style="display:none">
                    No products found.
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
@section('customjs')

<script src="{{url('/frontend')}}/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="{{url('/frontend')}}/js/categories_custom.js"></script>
@endsection