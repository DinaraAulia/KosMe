@extends('layouts.app')

@section('content')

<!-- Banner Start -->
<div class="kos-banner">
    <h2 class="fw-bold">⚡ KosMe</h2>
</div>
<!-- Banner Promo End -->

<!-- Filter/Search Start -->
<div id="searchkos" class="container" style="scroll-margin-top: 90px;">
    <div class="bg-white shadow rounded px-4 py-3" style="margin-top: -40px; position: relative; z-index: 2;">
        <form action="" method="GET">
            <div class="row g-2">
                <div class="col-md-4">
                    <select class="form-select py-3" name="kota" aria-label="Pilih Kota">
                        <option selected disabled>Pilih Kota</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Malang">Malang</option>
                        <option value="Jakarta">Jakarta</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-select py-3" name="tipe_kos" aria-label="Tipe Kos">
                        <option selected disabled>Tipe Kos</option>
                        <option value="Campur">Campur</option>
                        <option value="Putra">Putra</option>
                        <option value="Putri">Putri</option>
                    </select>
                </div>
                <div class="col-md-4 d-grid">
                    <button class="btn btn-primary py-3" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Filter/Search End -->

<!-- Hasil Info -->
<div class="container mb-4" style="margin-top: 40px;">
    <p class="mb-4"><strong>Menampilkan 1 - 15 dari 200 Kos di Surabaya bisa Anda booking</strong></p>
</div>

<!-- List Kos Start -->
<div class="container">
    <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
                {{-- Loop untuk menampilkan data kos dari database --}}
                @php
                    // Simulasi data kos (ganti dengan data dari controller/database)
                    $kosList = [
                        ['id' => 1, 'name' => 'Kos Golden Harmoni', 'price' => 1500000, 'address' => 'Jl. Sutorejo No.12, Surabaya', 'type' => 'Campur', 'available_rooms' => 1],
                        ['id' => 2, 'name' => 'Kos Indah Permai', 'price' => 1200000, 'address' => 'Jl. Raya Darmo No.45, Surabaya', 'type' => 'Putri', 'available_rooms' => 3],
                        ['id' => 3, 'name' => 'Kos Sejahtera', 'price' => 1800000, 'address' => 'Jl. Gubeng Raya No.78, Surabaya', 'type' => 'Putra', 'available_rooms' => 2],
                        ['id' => 4, 'name' => 'Kos Harmoni', 'price' => 1000000, 'address' => 'Jl. Sutorejo No.12, Surabaya', 'type' => 'Campur', 'available_rooms' => 1],
                        ['id' => 5, 'name' => 'Kos Bunga Melati', 'price' => 1300000, 'address' => 'Jl. Raya Darmo No.45, Surabaya', 'type' => 'Putri', 'available_rooms' => 3],
                        ['id' => 6, 'name' => 'Kos Citra Mandiri', 'price' => 1600000, 'address' => 'Jl. Gubeng Raya No.78, Surabaya', 'type' => 'Putra', 'available_rooms' => 2],
                        ['id' => 7, 'name' => 'Kos Bahagia', 'price' => 1400000, 'address' => 'Jl. Sutorejo No.12, Surabaya', 'type' => 'Campur', 'available_rooms' => 1],
                        ['id' => 8, 'name' => 'Kos Melati Indah', 'price' => 1250000, 'address' => 'Jl. Raya Darmo No.45, Surabaya', 'type' => 'Putri', 'available_rooms' => 3],
                        ['id' => 9, 'name' => 'Kos Citra Harmoni', 'price' => 1700000, 'address' => 'Jl. Gubeng Raya No.78, Surabaya', 'type' => 'Putra', 'available_rooms' => 2],
                        // Tambahkan data lainnya...
                    ];
                @endphp

                @foreach($kosList as $kos)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            {{-- Link gambar yang mengarah ke halaman detail --}}
                            <a href="{{ route('pages.detailKos', $kos['id']) }}">
                                <img class="img-fluid" src="/home/img/property-1.jpg" alt="{{ $kos['name'] }}">
                            </a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">{{ $kos['type'] }}</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">{{ $kos['available_rooms'] }} Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp {{ number_format($kos['price'], 0, ',', '.') }}/month</h5>
                            {{-- Link nama kos yang juga mengarah ke halaman detail --}}
                            <a class="d-block h5 mb-2" href="{{ route('pages.detailKos', $kos['id']) }}">{{ $kos['name'] }}</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $kos['address'] }}</p>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-bed text-primary me-2"></i>Kasur
                            </small>
                            <small class="flex-fill text-center py-2">
                                <i class="fa fa-bath text-primary me-2"></i>Kamar Mandi
                            </small>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Pagination or Load More -->
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a class="btn btn-primary py-3 px-5" href="#">Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- List Kos End -->

@endsection