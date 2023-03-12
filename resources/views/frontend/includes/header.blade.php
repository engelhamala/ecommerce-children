<header>
    {{-- <div class="spinner">
        <div class="loader"></div>
    </div> --}}
    {{-- <a class="logo" href="{{ '/' }}">logo</a> --}}

    <div class="topbar">
        <div class="container-fluid">
            <div class="top-bar d-flex justify-content-between">
                <div class="phone d-flex gap-3">
                    <span class="welcome">Welcome to jadusona</span>
                    <a href="" class="phone-number">Hotline: 0123 456 789</a>
                </div>
                <ul class="topbar-list list-unstyled d-flex justify-content-center align-items-center gap-1">
                    <li class="nav-item dropdown">
                        <a class="top-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            ENG
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="">
                            <li><a class="dropdown-item" href="#">ENGLISH</a></li>
                            <li><a class="dropdown-item" href="#">SPANISH</a></li>
                            <li><a class="dropdown-item" href="#">FRANCE</a></li>
                            <li><a class="dropdown-item" href="#">RUSSIAN</a></li>
                            <li><a class="dropdown-item" href="#">CHINESE</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="top-link dropdown-toggle" href="#" id="" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            $USD
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">POUND</a></li>
                            <li><a class="dropdown-item" href="#">POUND</a></li>
                            <li><a class="dropdown-item" href="#">DOLLAR</a></li>
                            <li><a class="dropdown-item" href="#">EURO</a></li>
                            <li><a class="dropdown-item" href="#">YEN</a></li>
                        </ul>
                    </li>

                </ul>
                <div class="account d-flex">
                    <a href="" class="myaccount">
                        My Account
                    </a>
                    <div class="log">
                        <a href="" class="register">Register</a>
                        <a href="" class="login">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <div class="meduim-screen">

                <div class="header-logo">
                    <a href="index.html">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="toggle-icon">
                    <div class="header-shop-links d-flex gap-5">
                        <div class="header-search">
                            <button class="search-toggle">
                                <i class="fa fa-search icon" aria-hidden="true"></i>
                                <i class="fa fa-close icon toggle-close" aria-hidden="true"></i>
                            </button>
                            <div class="header-search-wrap">
                                <form action="#">
                                    <input type="text" placeholder="Type and hit enter">
                                    <button><i class="fa fa-search icon" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="header-wishlist">
                            <a href="wishlist.html">
                                <i class="fa fa-heart-o icon" aria-hidden="true"></i>
                                <span>02</span></a>
                        </div>
                        <div class="header-mini-cart">
                            <a href="cart.html">
                                <i class="fa fa-shopping-cart icon" aria-hidden="true"></i>
                                <span>02($250)</span></a>
                        </div>

                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="">
                    </a>
                </div>
                <ul class="navbar-nav my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 150px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SHOP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{ 'products' }}">Shop</a></li>
                            <li><a class="dropdown-item" href="#">Shop Left Sidebar</a></li>
                            <li><a class="dropdown-item" href="#">Shop Right Sidebar</a></li>
                            <li><a class="dropdown-item" href="#">Single Product</a></li>
                            <li><a class="dropdown-item" href="#">Single Product Left Sidebar</a></li>
                            <li><a class="dropdown-item" href="#">Single Product Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PAGES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Cart</a></li>
                            <li><a class="dropdown-item" href="#">Checkout</a></li>
                            <li><a class="dropdown-item" href="#">Login &amp; Register</a></li>
                            <li><a class="dropdown-item" href="#">My Account</a></li>
                            <li><a class="dropdown-item" href="#">Wishlist</a></li>
                            <li><a class="dropdown-item" href="#">404 Error</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            BLOG
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">BLOG</a></li>
                            <li><a class="dropdown-item" href="#">SINGLE BLOG</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">CONTACT</a>
                    </li>
                </ul>
                <div class="header-shop-links d-flex gap-5">
                    <div class="header-search">
                        <button class="search-toggle">
                            <i class="fa fa-search icon" aria-hidden="true"></i>
                            <i class="fa fa-close icon toggle-close" aria-hidden="true"></i>
                        </button>
                        <div class="header-search-wrap">
                            <form action="#">
                                <input type="text" placeholder="Type and hit enter">
                                <button><i class="fa fa-search icon" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="header-wishlist">
                        <a href="wishlist.html">
                            <i class="fa fa-heart-o icon" aria-hidden="true"></i>
                            <span>02</span></a>
                    </div>
                    <div class="header-mini-cart">
                        <a href="cart.html">
                            <i class="fa fa-shopping-cart icon" aria-hidden="true"></i>
                            <span>02($250)</span></a>
                    </div>

                </div>
            </div>

        </div>
    </nav>



</header>
