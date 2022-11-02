@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transaction Detail
@endsection

@section('content')
    <div id="page-content-wrapper">
        <!-- Section Content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">#STORE0067</h2>
                    <p class="dashboard-subtitle">
                        Transaction Details
                    </p>
                </div>
                <div class="dashboard-content" id="transactionDetails">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <img src="/images/product-card-1.png" alt="" class="w-100 mb-3" />
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Customer Name</div>
                                                    <div class="product-subtitle">Cipta the tegar</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Product Name</div>
                                                    <div class="product-subtitle">Sirup Darah Kunti</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Date of transaction</div>
                                                    <div class="product-subtitle">20 Oktober 2022</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Status</div>
                                                    <div class="product-subtitle text-danger">Pending</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Total Amount</div>
                                                    <div class="product-subtitle">Rp.123.000.00</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Mobile</div>
                                                    <div class="product-subtitle">+62 96717 02405</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-4">
                                            <h5>Shipping Information</h5>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Address I</div>
                                                    <div class="product-subtitle">Jl Nogogini Sleman</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Address II</div>
                                                    <div class="product-subtitle">Blok A, No. 96</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Province</div>
                                                    <div class="product-subtitle">D.I Yogyakarta</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">City</div>
                                                    <div class="product-subtitle">Yogyakarta</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Postal Code</div>
                                                    <div class="product-subtitle">55612</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Country</div>
                                                    <div class="product-subtitle">Indonesia</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Status</div>
                                                    <select name="status" id="status" class="form-control"
                                                        v-model="status">
                                                        <option value="UNPAID">Upaid</option>
                                                        <option value="PENDING">Pending</option>
                                                        <option value="SHIPPING">Shipping</option>
                                                        <option value="SUCCESS">Success</option>
                                                    </select>
                                                </div>
                                                <template v-if="status == 'SHIPPING'">
                                                    <div class="col-md-3">
                                                        <div class="product-title">Input Resi</div>
                                                        <input type="text" class="form-control" name="resi"
                                                            v-model="resi">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button type="submit" class="btn btn-primary mt-4">
                                                            Update Resi
                                                        </button>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn btn-primary btn-lg rounded-pill mt-4">
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

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
  var transactionDetails = new Vue({
    el: '#transactionDetails',
    data: {
      status: "SHIPING",
      resi: "YG0123221623822",
    },
  });
</script>
@endpush
