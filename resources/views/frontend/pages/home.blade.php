@extends('frontend.layouts.app')

@section('content')
    <!--****************** home section*************** -->
    <div class="section-home">
        <div class="flexslider" id="homeslider">
            <ul class="slides">
                <li class="slides-item">
                    <div class="d-flex home-item text-center">
                        <a href="#">
                            <div class="home-description">
                                <div class="home-title">
                                    <span class="one-title">Get 35% off </span>
                                    <span>Latest Baby Product</span>
                                </div>

                                <span class="badge shop">SHOP NOW</span>
                            </div>
                        </a>
                        <img src="{{ asset('frontend/assets/images/back-1.jpg') }}" alt="">
                    </div>
                </li>

                <li class="slides-item">
                    <div class="d-flex home-item text-center">
                        <a href="#">
                            <div class="home-description">
                                <div class="home-title">
                                    <span class="one-title">Get 35% off </span>
                                    <span>Latest Baby Product</span>
                                </div>
                                <span class="btn badge shop">SHOP NOW</span>
                            </div>
                        </a>
                        <img src="{{ asset('frontend/assets/images/back-2.jpg') }}" alt="">
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--****************** new section*************** -->

    <div class="section-new text-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="">
                        <div class="item new-item">
                            <img src="{{ asset('frontend/assets/images/3.jpg') }}" alt="">
                            <div class="content new-content">
                                <h2 class="new-title">New Arrival <br>Baby’s Shoe <br>GET 30% OFF</h2>
                                <span class="shop-now" data-hover="SHOP NOW">SHOP NOW</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="">
                        <div class="item new-item">
                            <img src="{{ asset('frontend/assets/images/2.jpg') }}" alt="">
                            <div class="content new-content">
                                <div class="new-item-bg">
                                    <h2 class="new-title new-title-background">New Toy’s for your Baby</h2>
                                </div>
                                <span class="banner-offer">25% off</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="">
                        <div class="item new-item">
                            <img src="{{ asset('frontend/assets/images/1.jpg') }}" alt="">
                            <div class="new-content">
                                <h2 class="new-title">Trendy<br>
                                    Collections</h2>
                                <span class="shop-now" data-hover="SHOP NOW">SHOP NOW</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--****************** product section*************** -->
    <div class="section-product text-center">
        <div class="container">
            <div class="title">
                <h2 class="first-title">
                    Popular Products
                </h2>
                <span class="second-title">
                    All popular product find here
                </span>
            </div>
            <div class="product-type">
                <ul class="type-list list-unstyled d-flex justify-content-center gap-3">
                    <li class="list-item active" onclick="filterObjects('all')">
                        ALL
                    </li>
                    <li class="list-item" onclick="filterObjects('Jumpsuit')">
                        Jumpsuit
                    </li>
                    <li class="list-item" onclick="filterObjects('Shoe')">
                        Shoe
                    </li>
                    <li class="list-item" onclick="filterObjects('Shirt')">
                        Shirt
                    </li>
                    <li class="list-item" onclick="filterObjects('T-Shirt')">
                        T-Shirt
                    </li>
                    <li class="list-item" onclick="filterObjects('Bowknot')">
                        Bowknot Bodysuit
                    </li>
                </ul>
            </div>
            <div class="flexslider" id="productslider">
                <ul class="slides">
                    <li class="slides-item">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="slides-item">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="product-item box Shoe">
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                                        <div class="image-overlay" style="height: 100%;">
                                            <div class="action-buttons">
                                                <button class="add-cart">add to cart</button>
                                                <button class="add-wishlist">add to wishlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="content-head d-flex justify-content-between mb-3">
                                            <h4 class="item-title">Tmart Baby Dress</h4>
                                            <span class="price">$25</span>
                                        </div>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                        </div>
                                        <div class="item-size d-flex gap-1">
                                            <h5 class="size">Size : </h5>
                                            <span class="size-option">S</span>
                                            <span class="size-option">M</span>
                                            <span class="size-option">L</span>
                                            <span class="size-option">XL</span>
                                        </div>
                                        <div class="item-color d-flex gap-1">
                                            <div class="item-color d-flex gap-1">
                                                <div class="all-color">
                                                    <span class="color">Color:</span>
                                                    <ul class="color-list list-unstyled">
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                        <li class="item-color"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!--****************** solid section*************** -->
    <div class="section-solid text-center">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="">
                    <div class="item new-item">
                        <div class="image">
                            <img src="{{ asset('frontend/assets/images/banner-4.jpg') }}" alt="">
                        </div>
                        <div class="content-solid">
                            <h1 class="arrivle">New Arrivals</h1>
                            <h2 class="arrivle">Up to 35% off</h2>
                            <h4 class="off">2 - 5 Years</h4>
                        </div>
                        <span class="shop-now" data-hover="SHOP NOW">SHOP NOW</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="">
                    <div class="item new-item">
                        <div class="image">
                            <img src="{{ asset('frontend/assets/images/banner-5.jpg') }}" alt="">
                        </div>
                        <div class="content-inner">
                            <h1 class="shopping">Online Shopping</h1>
                            <h2 class="trend">Flat 25% off <br>New Trend for 2018</h2>
                        </div>
                        <span class="shop-now" data-hover="SHOP NOW">SHOP NOW</span>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="">
                    <div class="item new-item">
                        <div class="image">
                            <img src="{{ asset('frontend/assets/images/banner-6.jpg') }}" alt="">
                        </div>
                        <div class="content-solid first-child">
                            <h1 class="arrivle">Collection for <br>Baby Girl’s</h1>
                            <h2 class="off">Flat 25% off</h2>
                        </div>
                        <span class="shop-now" data-hover="SHOP NOW">SHOP NOW</span>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <!--****************** sale section*************** -->
    <div class="section-sale text-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="col-title">
                        <h2 class="first-title">Best Deal</h2>
                        <span class="second-title">
                            Exclusive deals for you
                        </span>
                    </div>
                    <div class="image-slider">
                        <div class="flexslider" id="productdeal">
                            <ul class="slides">
                                <li class="slides-item">
                                    <div class="sale-slide-item d-flex">
                                        <img src="{{ asset('frontend/assets/images/best-deal-2.jpg') }}" alt="">
                                        <a href="#">
                                            <div class="content-top">
                                                <div class="content-top-right">
                                                    <h4 class="title-content-top">Kelly Shirt Set</h4>
                                                    <div class="ratting d-flex">
                                                        <i class="fa fa-star icon-star"></i>
                                                        <i class="fa fa-star icon-star"></i>
                                                        <i class="fa fa-star icon-star"></i>
                                                        <i class="fa fa-star-half-o icon-star"></i>
                                                        <i class="fa fa-star-o icon-star"></i>
                                                    </div>
                                                </div>
                                                <div class="content-top-left">
                                                    <span class="price">$09 <span class="old">$25</span></span>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="count d-flex" data-countdown="2021/06/20">
                                                    <span class="count-day"><span class="time-count">0</span>
                                                        <p class="date-time">Days</p>
                                                    </span>
                                                    <span class="count-day"><span class="time-count">0</span>
                                                        <p class="date-time">Hours</p>
                                                    </span>
                                                    <span class="count-day minutes"><span class="time-count">00</span>
                                                        <p class="date-time">Mint</p>
                                                    </span>
                                                    <span class="count-day second"><span class="time-count">00</span>
                                                        <p class="date-time">Secs</p>
                                                    </span>
                                                </div>
                                                <span class="shop-now" data-hover="SHOP NOW">SHOP NOW</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>

                                <li class="slides-item">
                                    <div class="sale-slide-item d-flex">
                                        <img src="{{ asset('frontend/assets/images/best-deal-1.jpg') }}" alt="">
                                        <a href="#">
                                            <div class="content-top">
                                                <div class="content-top-right">
                                                    <h4 class="title-content-top">2 Piece Shirt Set</h4>
                                                    <div class="ratting d-flex">
                                                        <i class="fa fa-star icon-star"></i>
                                                        <i class="fa fa-star icon-star"></i>
                                                        <i class="fa fa-star icon-star"></i>
                                                        <i class="fa fa-star-half-o icon-star"></i>
                                                        <i class="fa fa-star-o icon-star"></i>
                                                    </div>
                                                </div>
                                                <div class="content-top-left">
                                                    <span class="price">$09 <span class="old">$25</span></span>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="count d-flex" data-countdown="2021/06/20">
                                                    <span class="count-day"><span class="time-count">0</span>
                                                        <p class="date-time">Days</p>
                                                    </span>
                                                    <span class="count-day"><span class="time-count">0</span>
                                                        <p class="date-time">Hours</p>
                                                    </span>
                                                    <span class="count-day minutes"><span class="time-count">00</span>
                                                        <p class="date-time">Mint</p>
                                                    </span>
                                                    <span class="count-day second"><span class="time-count">00</span>
                                                        <p class="date-time">Secs</p>
                                                    </span>
                                                </div>
                                                <span class="shop-now" data-hover="SHOP NOW">SHOP NOW</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="col-title">
                        <h2 class="first-title">On Sale Products</h2>
                        <span class="second-title">
                            All featured product find here
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <a href="">
                                <div class="sale-item">
                                    <img src="{{ asset('frontend/assets/images/on-sale-1.jpg') }}" alt="">
                                    <div class="content-item">
                                        <h4 class="item-title">Tmart Baby Dress</h4>
                                        <span class="price">$19 <span class="old">$35</span></span>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <a href="">
                                <div class="sale-item">
                                    <img src="{{ asset('frontend/assets/images/on-sale-1.jpg') }}" alt="">
                                    <div class="content-item">
                                        <h4 class="item-title">Tmart Baby Dress</h4>
                                        <span class="price">$19 <span class="old">$35</span></span>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <a href="">
                                <div class="sale-item">
                                    <img src="{{ asset('frontend/assets/images/on-sale-1.jpg') }}" alt="">
                                    <div class="content-item">
                                        <h4 class="item-title">Tmart Baby Dress</h4>
                                        <span class="price">$19 <span class="old">$35</span></span>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <a href="">
                                <div class="sale-item">
                                    <img src="{{ asset('frontend/assets/images/on-sale-1.jpg') }}" alt="">
                                    <div class="content-item">
                                        <h4 class="item-title">Tmart Baby Dress</h4>
                                        <span class="price">$19 <span class="old">$35</span></span>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <a href="">
                                <div class="sale-item">
                                    <img src="{{ asset('frontend/assets/images/on-sale-1.jpg') }}" alt="">
                                    <div class="content-item">
                                        <h4 class="item-title">Tmart Baby Dress</h4>
                                        <span class="price">$19 <span class="old">$35</span></span>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <a href="">
                                <div class="sale-item">
                                    <img src="{{ asset('frontend/assets/images/on-sale-1.jpg') }}" alt="">
                                    <div class="content-item">
                                        <h4 class="item-title">Tmart Baby Dress</h4>
                                        <span class="price">$19 <span class="old">$35</span></span>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <a href="">
                                <div class="sale-item">
                                    <img src="{{ asset('frontend/assets/images/on-sale-1.jpg') }}" alt="">
                                    <div class="content-item">
                                        <h4 class="item-title">Tmart Baby Dress</h4>
                                        <span class="price">$19 <span class="old">$35</span></span>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <a href="">
                                <div class="sale-item">
                                    <img src="{{ asset('frontend/assets/images/on-sale-1.jpg') }}" alt="">
                                    <div class="content-item">
                                        <h4 class="item-title">Tmart Baby Dress</h4>
                                        <span class="price">$19 <span class="old">$35</span></span>
                                        <div class="ratting d-flex">
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star icon-star"></i>
                                            <i class="fa fa-star-o icon-star"></i>
                                            <i class="fa fa-star-half-o icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--****************** Shipping section*************** -->
    <div class="section-Shipping text-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item feature-item">
                        <div class="icon">
                            <i class="fa fa-retweet" aria-hidden="true"></i>
                        </div>
                        <div class="shipping-content">
                            <h3 class="shipping-content-title">Free Shipping</h3>
                            <p class="shipping-content-description">Start from $100</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item feature-item">
                        <div class="icon">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                        </div>
                        <div class="shipping-content">
                            <h3 class="shipping-content-title">Free Shipping</h3>
                            <p class="shipping-content-description">Start from $100</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item feature-item">
                        <div class="icon">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        <div class="shipping-content">
                            <h3 class="shipping-content-title">Free Shipping</h3>
                            <p class="shipping-content-description">Start from $100</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--****************** testimonial section*************** -->
    <div class="testimonial-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-sm-12 mb-4">
                    <div class="row">
                        <div class="col-title">
                            <h2 class="first-title">CLIENTS REVIEW</h2>
                            <span class="second-title">
                                Clients says abot us
                            </span>
                        </div>
                        <div class="testimonial-item mb-4">
                            <p class="testimonial-description">Jadusona is one of the most exclusive Baby shop in the
                                wold, where you can find all
                                product for your baby that your want to buy for your baby. I recomanded this shop all of
                                you
                            </p>
                            <div class="testimonial-author d-flex justify-content-start gap-4">
                                <img src="{{ asset('frontend/assets/images/testimonial-1.png') }}" alt="">
                                <div class="testimonial-content">
                                    <h4 class="testimonial-name">Zacquline Smith</h4>
                                    <span class="testimonial-work">CEO, Momens Group</span>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-item mb-4">
                            <p class="testimonial-description">Jadusona is one of the most exclusive Baby shop in the
                                wold, where you can find all
                                product for your baby that your want to buy for your baby. I recomanded this shop all of
                                you</p>
                            <div class="testimonial-author d-flex justify-content-start gap-4">
                                <img src="{{ asset('frontend/assets/images/testimonial-2.png') }}" alt="">
                                <div class="testimonial-content">
                                    <h4 class="testimonial-name">Zacquline Smith</h4>
                                    <span class="testimonial-work">CEO, Momens Group</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-sm-12 mb-4">
                    <div class="row">
                        <div class="col-title">
                            <h2 class="first-title">FROM THE BLOG</h2>
                            <span class="second-title">
                                Find all latest update here
                            </span>
                        </div>
                        <a href="">
                            <div class="blog-item d-flex justify-content-start gap-4">
                                <div class="image-wrap d-flex">
                                    <div class="date">
                                        <span class="month">May</span>
                                        <span class="day">25</span>
                                    </div>
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/blog-1.jpg') }}" alt="">
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <h4 class="blog-name">Lates and new Trens for baby fashion</h4>
                                    <span class="blog-description">Jadusona is one of the most of a exclusive Baby shop in
                                        the</span>
                                    <ul class="blog-list list-unstyled d-flex gap-3">
                                        <li class="blog-item-list">
                                            <img src="{{ asset('frontend/assets/images/blog-author-1.jpg') }}"
                                                alt="">
                                        </li>
                                        <li class="blog-item-list">Muhin</li>
                                        <li class="blog-item-list d-flex justify-content-center gap-1">25 <span
                                                class="view">Likes</span> </li>
                                        <li class="blog-item-list d-flex justify-content-center gap-1">05 <span
                                                class="view">Views</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="blog-item d-flex justify-content-start gap-4">
                                <div class="image-wrap d-flex">
                                    <div class="date">
                                        <span class="month">May</span>
                                        <span class="day">20</span>
                                    </div>
                                    <div class="image">
                                        <img src="{{ asset('frontend/assets/images/blog-2.jpg') }}" alt="">
                                    </div>
                                </div>

                                <div class="blog-content">
                                    <h4 class="blog-name">Lates and new Trens for baby fashion</h4>
                                    <span class="blog-description">Jadusona is one of the most of a exclusive Baby shop in
                                        the</span>
                                    <ul class="blog-list list-unstyled d-flex gap-3">
                                        <li class="blog-item-list">
                                            <img src="{{ asset('frontend/assets/images/blog-author-2.jpg') }}"
                                                alt="">
                                        </li>
                                        <li class="blog-item-list">Muhin</li>
                                        <li class="blog-item-list d-flex justify-content-center gap-1">25 <span
                                                class="view">Likes</span> </li>
                                        <li class="blog-item-list d-flex justify-content-center gap-1">05 <span
                                                class="view">Views</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--****************** toys section*************** -->
    <div class="toys-section">
        <div class="container">
            <div class="flexslider" id="toysslider">
                <ul class="slides">
                    <li class="slides-item">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-1.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-2.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-3.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-4.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-5.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-6.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="slides-item">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-1.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-2.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-3.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-4.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-5.png') }}" alt="">
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-3">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-6.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--****************** email section*************** -->
@endsection
