@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Breadcrumb -->
        <div class="col-12 mb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Kos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $kos->name }}</li>
                </ol>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="col-lg-8">
            <!-- Hero Image -->
            <div class="mb-4">
                <img id="mainImage" src="/home/img/property-1.jpg" class="img-fluid rounded-3 w-100" alt="Kos Golden Harmoni" style="height: 400px; object-fit: cover;">
            </div>
            
            <!-- Gallery Thumbnails -->
            <div class="row g-2 mb-4">
                <div class="col-3">
                    <img src="/home/img/property-1.jpg" class="img-fluid rounded-2 thumbnail-img" alt="Kos Image 1" style="height: 80px; width: 100%; object-fit: cover; cursor: pointer;">
                </div>
                <div class="col-3">
                    <img src="/home/img/property-1.jpg" class="img-fluid rounded-2 thumbnail-img" alt="Kos Image 2" style="height: 80px; width: 100%; object-fit: cover; cursor: pointer;">
                </div>
                <div class="col-3">
                    <img src="/home/img/property-1.jpg" class="img-fluid rounded-2 thumbnail-img" alt="Kos Image 3" style="height: 80px; width: 100%; object-fit: cover; cursor: pointer;">
                </div>
                <div class="col-3">
                    <img src="/home/img/property-1.jpg" class="img-fluid rounded-2 thumbnail-img" alt="Kos Image 4" style="height: 80px; width: 100%; object-fit: cover; cursor: pointer;">
                </div>
            </div>

            <!-- Info Kos -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <h2 class="fw-bold mb-2">{{ $kos->name }}</h2>
                            <p class="text-muted mb-0">
                                <i class="fas fa-map-marker-alt me-2"></i>{{ $kos->address }}
                            </p>
                        </div>
                        <div class="text-end">
                            <h3 class="text-primary fw-bold mb-0">Rp {{ number_format($kos->price ?? 1300000, 0, ',', '.') }}</h3>
                            <small class="text-muted">per bulan</small>
                        </div>
                    </div>
                    
                    <div class="row g-3 mb-4">
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="fas fa-home text-primary me-3 fs-5"></i>
                                <div>
                                    <small class="text-muted d-block">Tipe Kos</small>
                                    <span class="fw-semibold">{{ $kos->type ?? 'Campur' }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="fas fa-bed text-primary me-3 fs-5"></i>
                                <div>
                                    <small class="text-muted d-block">Kamar Tersedia</small>
                                    <span class="fw-semibold">{{ $kos->available_rooms ?? '1' }} Kamar</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="fas fa-ruler-combined text-primary me-3 fs-5"></i>
                                <div>
                                    <small class="text-muted d-block">Luas Kamar</small>
                                    <span class="fw-semibold">{{ $kos->room_size ?? '1000' }} Sqft</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="fas fa-bath text-primary me-3 fs-5"></i>
                                <div>
                                    <small class="text-muted d-block">Kamar Mandi</small>
                                    <span class="fw-semibold">{{ $kos->bathroom_type ?? 'Dalam' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3">Deskripsi</h5>
                    <p class="text-muted lh-lg">
                        {{ $kos->description ?? 'Kos Golden Harmoni adalah kos yang terletak di lokasi strategis di Surabaya. Dengan fasilitas lengkap dan akses mudah ke berbagai tempat penting seperti kampus, pusat perbelanjaan, dan transportasi umum. Kos ini cocok untuk mahasiswa dan pekerja yang mencari tempat tinggal nyaman dengan harga terjangkau.' }}
                    </p>
                </div>
            </div>

            <!-- Fasilitas -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-4">Fasilitas</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-wifi text-success me-3"></i>
                                <span>WiFi Gratis</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-snowflake text-success me-3"></i>
                                <span>AC</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-bed text-success me-3"></i>
                                <span>Kasur</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-door-open text-success me-3"></i>
                                <span>Lemari</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-bath text-success me-3"></i>
                                <span>Kamar Mandi Dalam</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-utensils text-success me-3"></i>
                                <span>Dapur Bersama</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-motorcycle text-success me-3"></i>
                                <span>Parkir Motor</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-shield-alt text-success me-3"></i>
                                <span>Keamanan 24 Jam</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- CTA Section -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4 text-center">
                    <h4 class="text-primary fw-bold mb-1">Rp {{ number_format($kos->price ?? 1300000, 0, ',', '.') }}</h4>
                    <small class="text-muted mb-4 d-block">per bulan</small>
                    
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg">
                            <a href="{{ route('pembayaran', ['kos_id' => $kos->id]) }}" class="btn btn-primary btn-lg"><i class="fas fa-calendar-check me-2"></i>Booking Sekarang</a>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Info Pemilik -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4 text-center">
                    <img src="/home/img/team-2.jpg" class="rounded-circle mb-3" alt="Pemilik Kos" width="80" height="80" style="object-fit: cover;">
                    <h6 class="fw-bold mb-1">{{ $kos->owner_name ?? 'Budi Santoso' }}</h6>
                    <p class="text-muted small mb-3">Pemilik Kos</p>
                    <div class="d-flex gap-2 justify-content-center">
                        <a href="tel:+628123456789" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-phone me-1"></i>Telepon
                        </a>
                        <a href="mailto:owner@email.com" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-comments me-1"></i>Chat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kos Serupa -->
    <div class="row mt-5">
        <div class="col-12">
            <h4 class="fw-bold mb-4">Kos Serupa</h4>
            <div class="row g-4">
                @for($i = 1; $i <= 3; $i++)
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative overflow-hidden">
                            <a href="{{ route('pages.detailKos', $i) }}">
                                <img class="card-img-top" src="/home/img/property-1.jpg" alt="Kos Serupa {{ $i }}" style="height: 200px; object-fit: cover;">
                            </a>
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-primary">Campur</span>
                            </div>
                            <div class="position-absolute bottom-0 end-0 m-3">
                                <span class="badge bg-white text-dark">2 Kamar</span>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h5 class="text-primary fw-bold mb-0">Rp 1.300.000</h5>
                                <small class="text-muted">/bulan</small>
                            </div>
                            <h6 class="fw-bold mb-2">
                                <a href="{{ route('pages.detailKos', $i) }}" class="text-decoration-none text-dark">Kos Harmoni {{ $i }}</a>
                            </h6>
                            <p class="text-muted small mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>Jl. Raya Surabaya No.{{ $i }}
                            </p>
                            <div class="d-flex justify-content-between text-center border-top pt-3">
                                <small class="text-muted">
                                    <i class="fas fa-ruler-combined text-primary me-1"></i>900 Sqft
                                </small>
                                <small class="text-muted">
                                    <i class="fas fa-bed text-primary me-1"></i>Kasur
                                </small>
                                <small class="text-muted">
                                    <i class="fas fa-bath text-primary me-1"></i>K. Mandi
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>

<style>
.thumbnail-img:hover {
    opacity: 0.8;
    transform: scale(1.02);
    transition: all 0.2s ease;
}

.card {
    transition: all 0.2s ease;
}

.card:hover {
    transform: translateY(-2px);
}

.btn {
    transition: all 0.2s ease;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery functionality
    const mainImage = document.getElementById('mainImage');
    const thumbnails = document.querySelectorAll('.thumbnail-img');
    
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            mainImage.src = this.src;
            mainImage.alt = this.alt;
        });
    });
});
</script>

@endsection