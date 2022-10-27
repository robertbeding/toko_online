@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product
@endsection

@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">My Products</h2>
                <p class="dashboard-category">
                  Atur Produkmu menjadi baik dan dapatkan uangmu
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <a
                      href="/dashboard-products-create.html"
                      class="btn btn-primary small rounded-pill"
                    >
                      Add new product
                    </a>
                  </div>
                </div>
                <div class="row mt-4 ">
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      href="/dashboard-products-details.html"
                      class="card card-dashboard-product d-block"
                    >
                    <div class="card-body">
                      <img src="{{ asset('images/product-card-1.png')}}" alt="" class="w-100 mb-2">
                      <div class="product-title">Sirup darah kunti</div>
                      <div class="product-category">foods</div>
                    </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      href="/dashboard-products-details.html"
                      class="card card-dashboard-product d-block"
                    >
                    <div class="card-body">
                      <img src="{{ asset('images/product-card-2.png')}}" alt="" class="w-100 mb-2">
                      <div class="product-title">Sirup darah kunti</div>
                      <div class="product-category">foods</div>
                    </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      href="/dashboard-products-details.html"
                      class="card card-dashboard-product d-block"
                    >
                    <div class="card-body">
                      <img src="{{ asset('images/product-card-3.png')}}" alt="" class="w-100 mb-2">
                      <div class="product-title">Sirup darah kunti</div>
                      <div class="product-category">foods</div>
                    </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      href="/dashboard-products-details.html"
                      class="card card-dashboard-product d-block"
                    >
                    <div class="card-body">
                      <img src="{{ asset('images/product-card-2.png')}}" alt="" class="w-100 mb-2">
                      <div class="product-title">Sirup darah kunti</div>
                      <div class="product-category">foods</div>
                    </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a
                      href="/dashboard-products-details.html"
                      class="card card-dashboard-product d-block"
                    >
                    <div class="card-body">
                      <img src="{{ asset('images/product-card-1.png')}}" alt="" class="w-100 mb-2">
                      <div class="product-title">Sepatu jordan</div>
                      <div class="product-category">Sepatu</div>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
