@extends('app')

@section('title', 'Kontak')

@section('content')
    <section class="bg-white border-bottom py-5">
        <div class="container text-center">
            <h1 class="fw-bold">Hubungi Kami</h1>
            <p class="text-muted mb-0">Punya pertanyaan? Kirim pesan dan kami akan segera membalas</p>
        </div>
    </section>

    <section class="container py-5">
        <div class="row g-5">
            {{-- Info kontak --}}
            <div class="col-lg-4">
                <h5 class="fw-semibold mb-3">Informasi Kontak</h5>
                <p class="mb-2">📍 Jl. Contoh No. 123, Makassar</p>
                <p class="mb-2">📧 info@contoh.com</p>
                <p class="mb-2">📞 +62 812-3456-7890</p>
                <p class="mb-0">🕒 Senin - Jumat, 08.00 - 17.00 WITA</p>
            </div>

            {{-- Form --}}
            <div class="col-lg-8">
                <div class="bg-white rounded-4 shadow-sm p-4">

                    @if (session('sukses'))
                        <div class="alert alert-success">{{ session('sukses') }}</div>
                    @endif

                    <form action="{{ route('kontak.kirim') }}" method="POST" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                                   class="form-control @error('nama') is-invalid @enderror">
                            @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   class="form-control @error('email') is-invalid @enderror">
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea id="pesan" name="pesan" rows="5"
                                      class="form-control @error('pesan') is-invalid @enderror">{{ old('pesan') }}</textarea>
                            @error('pesan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary px-4">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection