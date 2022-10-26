@extends('layouts.app')

@section('title')
    Store Category Page
@endsection

@section('content')
    <div class="page-content page-details">
        <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/index.html">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">Detail Produk</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="store-gallery" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" data-aos="zoom-in">
                        <transition name="slide-fade" mode="out-in">
                            <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image"
                                alt="" />
                        </transition>
                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo,index) in photos" :key="photo.id"
                                data-aos="zoom-in" data-aos-delay="100">
                                <!-- object yang ada di photos di pecah menjadi variabel photo, dan menampilkan index -->
                                <a href="#" @click="changeActive(index)">
                                    <img :src="photo.url" class="w-100 thumbnail-image"
                                        :class="{ active: index == activePhoto }" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="store-details-container" data-aos="fade-up">
            <section class="store-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h1>Sofa Rusak</h1>
                            <div class="owner">By Cipta The</div>
                            <div class="price">Rp.1.500.000</div>
                        </div>
                        <div class="col-lg-2" data-aos="zoom-in">
                            <a href="/cart.html" class="btn btn-success px-4 text-white btn-block mb-3">add To Cart</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="store-description">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <p>
                                The Nike Air Max 720 SE goes bigger than ever before with
                                Nike's tallest Air unit yet for unimaginable, all-day comfort.
                                There's super breathable fabrics on the upper, while colours
                                add a modern edge.
                            </p>
                            <p>
                                Bring the past into the future with the Nike Air Max 2090, a
                                bold look inspired by the DNA of the iconic Air Max 90.
                                Brand-new Nike Air cushioning underfoot adds unparalleled
                                comfort while transparent mesh and vibrantly coloured details
                                on the upper are blended with timeless OG features for an
                                edgy, modernised look.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="store-review">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 mt-3 mb-3">
                            <h5>Customer Review</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <img src="/images/icons-testimonial-1.png" class="mr-3 rounded-circle" alt="" />
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-1">Cipta The</h5>
                                        Sofanya Jelek gak sesuai ekspetasi,pengiriman lambat
                                        pas di duduk gak empuk
                                    </div>
                                </li>
                                <li class="media">
                                    <img src="/images/icons-testimonial-2.png" class="mr-3 rounded-circle" alt="" />
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-1">Vendy Jemparu</h5>
                                        Sofa nya nyaman di rumah saya taruh di halaman rumah
                                        cocok buat anjing duduk
                                    </div>
                                </li>
                                <li class="media">
                                    <img src="/images/icons-testimonial-3.png" class="mr-3 rounded-circle" alt="" />
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-1">Andrea Aipasa</h5>
                                        Soffa ternyaman yang pernah saya punya harga murah cocok
                                        untuk tempat tidur anjing dan kucing saya
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
        let gallery = new Vue({
            el: "#gallery", // element yang ditargetkan adalah gallery(semua yang di oleh vue js)
            mounted() {
                //mounted ini adalah script yang akan dijalankan saat vue jsnya muncul
                AOS.init();
            },
            data: {
                activePhoto: 0,
                photos: [{
                        id: 1,
                        url: "/images/product-details-1.jpg",
                    },
                    {
                        id: 2,
                        url: "/images/product-details-2.jpg",
                    },
                    {
                        id: 3,
                        url: "/images/product-details-3.jpg",
                    },
                    {
                        id: 4,
                        url: "/images/product-details-4.jpg",
                    },
                ],
            },
            methods: {
                //menyimpan fungsi2 vue js, (yang akan dijalankan vue)
                changeActive(id) {
                    this.activePhoto = id;
                },
            },
        });
    </script>
@endpush
