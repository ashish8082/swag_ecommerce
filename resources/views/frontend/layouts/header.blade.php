
<!-- Add inside your existing header section -->

<!-- Top Announcement Bar -->
<div class="swaj-topbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-7">
                <span>
                    <i class="fa fa-heart"></i>
                    Free shipping on orders over $50
                </span>
            </div>
            <div class="col-5 text-right">
                <div class="swaj-account">
                    <a href="#" class="swaj-account-trigger">
                        My Account <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="swaj-account-menu">
                        <a href="{{ url('/login') }}">
                            <i class="fa fa-sign-in"></i> Sign In
                        </a>
                        <a href="{{ url('/register') }}">
                            <i class="fa fa-user-plus"></i> Register
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navbar -->
<div class="swaj-navbar">
    <div class="container">
        <div class="swaj-nav-inner">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="swaj-logo">
                <img src="{{ url('/frontend/images/logo_1.png') }}"
                     alt="SwaJ Shop">
            </a>

            <!-- Mobile Toggle -->
            <button type="button"
                    class="swaj-menu-toggle"
                    aria-label="Toggle navigation"
                    aria-expanded="false">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Navigation Links -->
            <nav class="swaj-nav-links">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/shop') }}">Shop</a>
                <a href="#">Collections</a>
                <a href="#">Blog</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </nav>

            <!-- Right Side Icons -->
            <div class="swaj-nav-actions">
                <a href="{{ url('/shop') }}" aria-label="Search products">
                    <i class="fa fa-search"></i>
                </a>

                <a href="{{ url('/login') }}" aria-label="My account">
                    <i class="fa fa-user-o"></i>
                </a>

                <a href="{{ url('/cart') }}"
                   class="swaj-cart"
                   aria-label="Shopping cart">
                    <i class="fa fa-shopping-bag"></i>
                    <span class="swaj-cart-count" id="checkout_items">
                        2
                    </span>
                </a>
            </div>

        </div>
    </div>
</div>
