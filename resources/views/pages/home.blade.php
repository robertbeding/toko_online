@extends('layouts.app')

@section('title')
    Store HomePage
@endsection

@section('content')
    <div class="page-content page-home">
        <!-- carousel -->
        <section class="store-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="zoom-in">
                        <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                                <li data-target="#storeCarousel"data-slide-to="1"></li>
                                <li data-target="#storeCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/images/banner.jpg" alt="Carousel image" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/banner.jpg" alt="Carousel image" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/banner.jpg" alt="Carousel image" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- trend categories -->
        <section class="store-trend-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>Trend Categories </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <a href="#" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="images/categories-gadgets.svg" alt="" class="w-100">
                            </div>
                            <p class="categories-text">
                                Gadgets
                            </p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                        <a href="" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="images/categories-baby.svg" alt="" class="w-100">
                            </div>
                            <p class="categories-text">
                                Baby
                            </p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
                        <a href="" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="images/categories-furniture.svg" alt="" class="w-100">
                            </div>
                            <p class="categories-text">
                                Furniture
                            </p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                        <a href="" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="images/categories-makeup.svg" alt="" class="w-100">
                            </div>
                            <p class="categories-text">
                                Makeup
                            </p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
                        <a href="" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="images/categories-sneaker.svg" alt="" class="w-100">
                            </div>
                            <p class="categories-text">
                                Sneaker
                            </p>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                        <a href="" class="component-categories d-block">
                            <div class="categories-image">
                                <img src="images/categories-tools.svg" alt="" class="w-100">
                            </div>
                            <p class="categories-text">
                                Tools
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- new products -->
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>New Products</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/products-apple-watch.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Apple Wacth 5
                            </div>
                            <div class="products-price">
                                Rp.4.500.000
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/products-black-edition-nike.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Black Editon Nike
                            </div>
                            <div class="products-price">
                                Rp.4.500.000
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/products-bubuk-maketti.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Bubuk Maketi
                            </div>
                            <div class="products-price">
                                Rp.500.000
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/products-sofa-ternyaman.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Sofa Empuk
                            </div>
                            <div class="products-price">
                                Rp.1.500.000
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/products-orange-bogotta.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Orange Boggota
                            </div>
                            <div class="products-price">
                                Rp.5.500.000
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/products-tatakan-gelas.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Tatakan gelas
                            </div>
                            <div class="products-price">
                                Rp.50.000
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/products-mavic-kawe.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Drone Mavic Kawe
                            </div>
                            <div class="products-price">
                                Rp.7.500.000
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <a href="/details.html" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image"
                                    style="background-image: url('/images/products-monkey-toys.jpg')">
                                </div>
                            </div>
                            <div class="products-text">
                                Mainan Monyet
                            </div>
                            <div class="products-price">
                                Rp.2.500.000
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
