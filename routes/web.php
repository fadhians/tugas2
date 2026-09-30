<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::post('/kontak', function (Request $request) {
    $request->validate([
        'nama'  => 'required|string|max:100',
        'email' => 'required|email',
        'pesan' => 'required|string|min:10',
    ], [
        'required' => ':attribute wajib diisi.',
        'email'    => 'Format email tidak valid.',
        'min'      => ':attribute minimal :min karakter.',
    ]);

    return back()->with('sukses', 'Terima kasih! Pesanmu sudah terkirim.');
})->name('kontak.kirim');