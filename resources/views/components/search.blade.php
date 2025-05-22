<!-- Search Start -->
        <div id="searchkos" class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s"
     style="padding: 25px; scroll-margin-top: 70px;">
            <div class="container">
                <form action="{{ route('kos.search') }}" method="GET">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <input type="text" name="location" class="form-control border-0 py-3" placeholder="Masukkan Lokasi (e.g., Surabaya)">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-dark border-0 w-100 py-3">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
<!-- Search End -->
