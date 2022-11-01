<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    <link href="/style/button.css" rel="stylesheet" />
    @stack('addon-script')
</head>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- Sidebar -->
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action active">
                        Dashboard
                    </a>
                    <a href="{{ route('dashboard-product') }}" class="list-group-item list-group-item-action">
                        My Products
                    </a>
                    <a href="{{ route('dashboard-transaction') }}" class="list-group-item list-group-item-action">
                        Transaction
                    </a>
                    <a href="{{ route('dashboard-setting') }}" class="list-group-item list-group-item-action">
                        Store Settings
                    </a>
                    <a href="/dashboard-account.html" class="list-group-item list-group-item-action">
                        My Account
                    </a>
                    <a href="/index.html" class="list-group-item list-group-item-action">
                        Sign Out
                    </a>
                </div>
            </div>

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
                    <div class="container-fluid">
                        <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                            &laquo; Menu
                        </button>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportContent">
                            <!-- Dekstop menu -->
                            <!-- d-none agar tidak muncul pada tampilan mobile -->
                            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                                <li class="nav-item dropdown">
                                    <a href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                                        class="nav-link">
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
                            <!-- untuk dimobile dimunculin, tapi dilayar gede tidak di munculin -->
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
                {{-- Content --}}
                @yield('content')

            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')

    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="/script/navbar-scroll.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    @stack('addon-script')
</body>

</html>
