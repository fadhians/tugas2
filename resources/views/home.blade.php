@extends('app')

@section('title', 'Home')

@section('content')
    {{-- Hero --}}
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Selamat Datang di {{ config('app.name') }}</h1>
            <p class="lead mb-4 mx-auto" style="max-width: 640px;">
                Solusi digital yang sederhana, cepat, dan profesional untuk kebutuhan Anda.
            </p>
            <a href="{{ route('kontak') }}" class="btn btn-light btn-lg px-4 me-2">Hubungi Kami</a>
            <a href="{{ route('tentang') }}" class="btn btn-outline-light btn-lg px-4">Pelajari Lebih Lanjut</a>
        </div>
    </section>

    {{-- Fitur --}}
    <section class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Layanan Kami</h2>
            <p class="text-muted">Hal-hal yang kami tawarkan untuk Anda</p>
        </div>

        <div class="row g-4">
            @php
                $fitur = [
                    ['ikon' => '⚡', 'judul' => 'Cepat',      'isi' => 'Performa optimal dengan waktu muat yang singkat.'],
                    ['ikon' => '🔒', 'judul' => 'Aman',       'isi' => 'Keamanan data menjadi prioritas utama kami.'],
                    ['ikon' => '🎨', 'judul' => 'Modern',     'isi' => 'Tampilan bersih, responsif, dan mudah digunakan.'],
                ];
            @endphp

            @foreach ($fitur as $f)
                <div class="col-md-4">
                    <div class="card feature-card h-100 shadow-sm p-3">
                        <div class="card-body">
                            <div class="icon-box mb-3">{{ $f['ikon'] }}</div>
                            <h5 class="fw-semibold">{{ $f['judul'] }}</h5>
                            <p class="text-muted mb-0">{{ $f['isi'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection