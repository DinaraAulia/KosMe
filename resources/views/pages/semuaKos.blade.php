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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="property-item rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <a href=""><img class="img-fluid" src="/home/img/property-1.jpg" alt=""></a>
                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">Campur</div>
                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">1 Kamar Tersedia</div>
                        </div>
                        <div class="p-4 pb-0">
                            <h5 class="text-primary mb-3">Rp 1.500.000/month</h5>
                            <a class="d-block h5 mb-2" href="">Kos Golden Harmoni</a>
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Sutorejo No.12, Surabaya</p>
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
                {{-- Tambahkan item kos lainnya sesuai kebutuhan --}}

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
