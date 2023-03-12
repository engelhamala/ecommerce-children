@extends('frontend.layouts.app')

@section('content')
    <!--****************** home section*************** -->
    <div class="section-home">
        {{-- <img src="{{ asset('frontend/assets/images/back-1.jpg') }}" alt=""> --}}
        <div class="home-product">
            <div class="container-fluid">
                <div class="home-item">
                    <h3 class="home-title">Single Product</h3>
                    <a href="#">
                        <span class="home">Home /</span>
                    </a>
                    <a href="#">
                        <span class="single-products">Single Product </span>
                    </a>

                </div>
            </div>
        </div>
    </div>
<!--****************** details section*************** -->
    <div class="section-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <!-- Place somewhere in the <body> of your page -->
                    <div id="product-slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('frontend/assets/images/product-1.jpg') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/product-1.jpg') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/product-1.jpg') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/product-1.jpg') }}" alt="">
                            </li>
                            <!-- items mirrored twice, total of 12 -->
                        </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('frontend/assets/images/product-2.jpg') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/product-3.jpg') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/product-2.jpg') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/product-4.jpg') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/assets/images/product-2.jpg') }}" alt="">
                            </li>
                            <!-- items mirrored twice, total of 12 -->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="content-product">
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
                            <span class="price">$09 </span>
                        </div>
                    </div>

                    <div class="product-description">
                        <p class="details-description">
                            enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui
                            ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora inform
                        </p>
                        <span class="avilable">Availability :
                            <span class="stock">in stock</span>
                        </span>

                        <div class="select d-flex align-items-center">
                            <div class="quantity-count">
                                <span class="quantity">Quantity :</span>
                                <div class="inc-dec">
                                    <span class="decrement">-</span>
                                    <span class="number">1</span>
                                    <span class="increment">+</span>
                                </div>
                            </div>
                            <div class="all-color">
                                <span class="color">Color :</span>
                                <ul class="color-list list-unstyled">
                                    <li class="item-color"></li>
                                    <li class="item-color"></li>
                                    <li class="item-color"></li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-action">
                            <div class="cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="to-cart">add to cart</span>
                            </div>
                            <div class="random">
                                <i class="fa fa-random"></i>
                            </div>
                            <div class="heart">
                                <i class="fa fa-heart"></i>
                            </div>
                        </div>

                        <div class="tags">
                            <span class="tag">tags:</span>
                            <ul class="tag-list list-unstyled">
                                <li class="tag-item">
                                    <a href="" class="link-item">Electronic</a>
                                </li>
                                <li class="tag-item">
                                    <a href="" class="link-item">Smartphone</a>
                                </li>
                                <li class="tag-item">
                                    <a href="" class="link-item">Phone</a>
                                </li>
                                <li class="tag-item">
                                    <a href="" class="link-item">Charger</a>
                                </li>
                                <li class="tag-item">
                                    <a href="" class="link-item">Powerbank</a>
                                </li>
                            </ul>
                        </div>

                        <div class="share-with">
                            <span class="share">share :</span>
                            <ul class="share-list list-unstyled">
                                <li class="share-item">
                                    <i class="fa fa-facebook"></i>
                                </li>
                                <li class="share-item">
                                    <i class="fa fa-twitter"></i>
                                </li>
                                <li class="share-item">
                                    <i class="fa fa-instagram"></i>
                                </li>
                                <li class="share-item">
                                    <i class="fa fa-google-plus"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product-information">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">More
                                info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Data
                                sheet</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Reviews</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            Fashion has been creating well-designed collections since 2010. The brand offers feminine
                            designs delivering stylish separates and statement dresses which have since evolved into a full
                            ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result?
                            Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the
                            beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion
                            extends to a range of accessories including shoes, hats, belts and more
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                    </tr>
                                    <tr>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="reviews">
                                <a href="#">Be the first to write your review!</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


<!--****************** related section*************** -->
    <div class="related-section">
        <div class="container">
            <div class="col-title">
                <h2 class="first-title">Related Product</h2>
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
                    </li>
                </ul>
            </div>
        </div>
    </div>
 <!--****************** toys section*************** -->
        <div class="toys-section">
            <div class="container">
                <div class="flexslider" id="toysslider">
                    <ul class="slides">
                        <li class="slides-item">
                            <div class="d-flex justify-content-between">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-1.png') }}" alt="">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-2.png') }}" alt="">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-3.png') }}" alt="">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-4.png') }}" alt="">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-5.png') }}" alt="">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-6.png') }}" alt="">
                                </a>
                            </div>
                        </li>

                        <li class="slides-item">
                            <div class="d-flex justify-content-between">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-1.png') }}" alt="">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-2.png') }}" alt="">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-3.png') }}" alt="">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-4.png') }}" alt="">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-5.png') }}" alt="">
                                </a>

                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/brand-6.png') }}" alt="">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endsection
