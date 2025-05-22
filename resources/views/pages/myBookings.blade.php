@extends('layouts.app') {{-- asumsi kamu pakai layout app --}}

@section('title', 'My Bookings')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 text-primary">My Bookings</h1>

    <div class="card shadow-sm mb-4" style="max-width: 700px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('home/img/kos-example.jpg') }}" class="img-fluid rounded-start" alt="Kos Example" />
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-primary">Kos Strategis Dekat Kampus</h5>
                    <p class="card-text"><strong>Alamat:</strong> Jl. Merdeka No.45, Jakarta</p>
                    <p class="card-text"><strong>Booking Date:</strong> 10 Mei 2025</p>
                    <p class="card-text"><strong>Status:</strong> Aktif</p>

                    <hr>

                    <h6>Tambahkan Testimoni</h6>
                    <textarea id="testimonialInput" class="form-control mb-2" rows="3" placeholder="Tulis testimoni kamu di sini..."></textarea>
                    <button id="btnSubmit" class="btn btn-primary">Kirim Testimoni</button>

                    <div id="testimonialList" class="mt-3">
                        {{-- Testimoni akan muncul di sini --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('btnSubmit').addEventListener('click', function() {
    const input = document.getElementById('testimonialInput');
    const list = document.getElementById('testimonialList');
    const text = input.value.trim();

    if (!text) {
        alert('Testimoni tidak boleh kosong!');
        return;
    }

    const newTestimonial = document.createElement('div');
    newTestimonial.classList.add('alert', 'alert-info');
    newTestimonial.textContent = text;

    list.appendChild(newTestimonial);
    input.value = '';
});
</script>
@endsection
