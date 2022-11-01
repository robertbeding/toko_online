@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product
@endsection

@section('content')
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
            <div class="container-fluid">
                <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                    &laquo; Menu
                </button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportContent">
                    <ul class="navbar-nav d-none d-lg-flex ml-auto">
                        <li class="nav-item dropdown">
                            <a href="" id="navbarDropdown" role="button" data-toggle="dropdown" class="nav-link">
                                <img src="/images/icon-user.png" alt=""
                                    class="rounded-circle mr-2 profile -picture" />
                                Hi, Robert Beding
                            </a>
                            <div class="dropdown-menu">
                                <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                                <a href="/dashboard-account.html" class="dropdown-item">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a href="/" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link d-inline-block mt-2">
                                <img src="/images/icon-cart-filled.svg" alt="" />
                                <div class="card-badge">3</div>
                            </a>
                        </li>
                    </ul>

                    <!-- Mobile menu -->
                    <ul class="navbar-nav d-block d-lg-none">
                        <li class="nav-item">
                            <a href="" class="nav-link"> Hi, Robert Beding </a>
                        </li>
                        <li class="nav-item d-inline-block">
                            <a href="" class="nav-link">cart</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Section Content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">Store Settings</h2>
                    <p class="dashboard-subtitle">
                        Buat tokomu semaking menarik
                    </p>
                </div>
                <div class="dashboard-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Toko</label>
                                                <input type="email" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select name="category" class="form-control">
                                                    <option value="" disabled>Select Category</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Store</label>
                                                <p class="text-muted">Apakah anda inggin membuka toko?</p>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" name="is_store_open"
                                                        id="openStoreTrue" value="true" />
                                                    <label for="openStoreTrue" class="custom-control-label">
                                                        Buka
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" name="is_store_open"
                                                        id="openStoreFalse" value="false" />
                                                    <label for="openStoreFalse" class="custom-control-label">
                                                        Sementara Tutup
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn btn-primary px-5 rounded-pill">
                                                Save Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

