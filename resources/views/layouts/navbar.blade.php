<!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="/home/img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
            </div>
            <h1 class="m-0 text-primary">KosMe</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="/user" class="nav-item nav-link {{ Request::is('user') ? 'active' : '' }}">Home</a>
                <a href="#searchkos" class="nav-item nav-link">Cari Kos?</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="/myBookings" class="nav-item nav-link {{ Request::is('myBookings') ? 'active' : '' }}">My Bookings</a>
                <!-- Tambahkan tombol login versi mobile di sini -->
                <a href="/login" class="nav-item nav-link btn btn-success square-btn d-lg-none">Login</a>
            </div>
            <!-- Tombol login versi desktop -->
            <a href="/login" class="btn btn-success square-btn ms-3 d-none d-lg-inline-block">Login</a>
        </div>
    </nav>
</div>
<!-- Navbar End -->

<style>
    /* Custom CSS untuk tombol kotak hijau */
    .square-btn {
        border-radius: 0 !important; /* Menghilangkan border radius */
        padding: 8px 20px !important;
        color: white !important;
        font-weight: 500 !important;
        border: none !important;
        box-shadow: none !important;
    }
    
    .btn-success {
        background-color: #00B98E !important; /* Warna hijau Bootstrap */
    }
    
    .btn-success:hover {
        background-color: #218838 !important; /* Warna hijau lebih gelap saat hover */
    }
    
    /* Untuk versi mobile, sesuaikan padding */
    @media (max-width: 992px) {
        .navbar-nav .square-btn {
            display: inline-block;
            width: auto;
            margin: 5px 0;
        }
    }
</style>