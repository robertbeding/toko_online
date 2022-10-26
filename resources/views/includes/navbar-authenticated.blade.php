<nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="/index.html" class="navbar-brand">
          <img src="/images/logo.svg" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/index.html"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/categories.html">Categories</a>
            </li>

            <li class="nav-item">
              <a href="/" class="nav-link">Rewards</a>
            </li>
          </ul>
          <!-- Dekstop menu -->

          <!-- d-none agar tidak muncul pada tampilan mobile -->
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
              <a
                href=""
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                class="nav-link"
              >
                <img
                  src="/images/icon-user.png"
                  alt=""
                  class="rounded-circle mr-2 profile -picture"
                />
                Hi, Robert Beding
              </a>
              <div class="dropdown-menu">
                <a href="/dashboard.html" class="dropdown-item">Dashboard</a>
                <a href="/dashboard-account.html" class="dropdown-item"
                  >Settings</a
                >
                <div class="dropdown-divider"></div>
                <a href="/" class="dropdown-item">Logout</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="/" class="nav-link d-inline-block mt-2">
                <img src="/images/icon-cart-empty.svg" alt="" />
              </a>
            </li>
          </ul>

          <!-- Mobile menu -->
          <!-- untuk dimobile dimunculin, tapi dilayar gede tidak di munculin -->
          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="" class="nav-link"> Hi, Robert Beding </a>
            </li>
            <li class="nav-item d-inline-block">cart</li>
          </ul>
        </div>
      </div>
    </nav>
