@extends('app')

@section('title', 'Tentang')

@section('content')
    <section class="bg-white border-bottom py-5">
        <div class="container text-center">
            <h1 class="fw-bold">Tentang Kami</h1>
            <p class="text-muted mb-0">Kenali lebih dekat siapa kami dan apa yang kami kerjakan</p>
        </div>
    </section>

    <section class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h3 class="fw-bold mb-3">Cerita Kami</h3>
                <p class="text-muted">
                    Kami adalah tim yang berfokus pada pengembangan solusi digital yang
                    bermanfaat. Dengan pendekatan yang rapi dan terstruktur, kami berkomitmen
                    menghadirkan produk berkualitas yang mudah digunakan.
                </p>
                <p class="text-muted">
                    Setiap proyek kami kerjakan dengan teliti, mulai dari perencanaan,
                    perancangan, hingga pengembangan.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="row g-3 text-center">
                    @foreach ([['50+', 'Proyek'], ['30+', 'Klien'], ['5', 'Tahun Pengalaman'], ['10', 'Anggota Tim']] as $s)
                        <div class="col-6">
                            <div class="bg-white rounded-4 shadow-sm p-4">
                                <h2 class="fw-bold text-primary mb-1">{{ $s[0] }}</h2>
                                <span class="text-muted">{{ $s[1] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                    <h5 class="fw-semibold text-primary">Visi</h5>
                    <p class="text-muted mb-0">Menjadi penyedia solusi digital yang terpercaya dan inovatif.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white rounded-4 shadow-sm p-4 h-100">
                    <h5 class="fw-semibold text-primary">Misi</h5>
                    <p class="text-muted mb-0">Memberikan layanan berkualitas dengan komunikasi yang jelas dan hasil yang tepat waktu.</p>
                </div>
            </div>
        </div>
    </section>
@endsection