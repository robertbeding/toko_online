@extends('layouts.dashboard')

@section('title')
    Store Dashboard
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">
                    Lihat apa yang bisa kamu buat hari ini!
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Customer</div>
                                <div class="dashboard-card-subtitle">11.234</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Revenue</div>
                                <div class="dashboard-card-subtitle">Rp.17.120.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Transaction</div>
                                <div class="dashboard-card-subtitle">Rp.24.222.030</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">Recent Transaction</h5>
                        <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="images/dashboard-icon-product-1.png" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        Sirup Darah Kunti
                                    </div>
                                    <div class="col-md-3">
                                        Cipta tegar
                                    </div>
                                    <div class="col-md-3">
                                        20 Oktober, 2022
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="images/dashboard-arrow-right.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="images/dashboard-icon-product-3.png" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        Sofa ga jelas
                                    </div>
                                    <div class="col-md-3">
                                        Vendy jemparu
                                    </div>
                                    <div class="col-md-3">
                                        11 Oktober, 2022
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="images/dashboard-arrow-right.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/dashboard-transactions-details.html" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="images/dashboard-icon-product-2.png" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        le Brone x
                                    </div>
                                    <div class="col-md-3">
                                        Agustina Cipta
                                    </div>
                                    <div class="col-md-3">
                                        18 Oktober, 2022
                                    </div>
                                    <div class="col-md-1 d-none d-md-block">
                                        <img src="images/dashboard-arrow-right.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
