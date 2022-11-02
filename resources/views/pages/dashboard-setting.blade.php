@extends('layouts.dashboard')

@section('title')
    Store Dashboard Settings
@endsection

@section('content')
    <div id="page-content-wrapper">
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

