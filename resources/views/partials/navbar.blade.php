<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">
            <img src="/img/logo.png" alt="">
            <span class="d-none d-lg-block">West Makmur</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <!-- Hanya tampilkan jika pengguna sedang login -->
            @if (Auth::check())
                <!-- Tombol untuk membuka modal log out -->
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center" href="#"
                        data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle me-2"></i>
                        <span class="d-none d-md-block dropdown-toggle">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::user()->name }}</h6>
                            <span>{{ Auth::user()->role->role }}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="modal"
                                data-bs-target="#logoutModal">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @else
                <nav class="header-nav ms-auto">
                    <ul class="d-flex align-items-center">
                        <a class="nav-link nav-profile d-flex align-items-center pe-3" href="{{ route('login') }}">
                            <i class="bi bi-person-circle me-2"></i>
                            <span class="d-none d-md-block">Login</span>
                        </a>
                    </ul>
                </nav>
            @endif
        </ul>
    </nav>
</header>
