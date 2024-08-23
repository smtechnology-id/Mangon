@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <div class="card shadow-lg" style="border-radius: 15px;">
        <div class="card-body text-center">
            <h5 class="font-weight-bold text-primary">Hasil Perhitungan</h5>
            <p class="text-muted">Berdasarkan data yang anda input, maka hasil perhitungannya adalah sebagai berikut :</p>
            <h4 class="text-success">Rekomendasi Toko :</h4>
            <p class="font-weight-bold" style="font-size: 1.5rem;">Nama Toko : {{ $maxSumRecord->nama_toko }}</p>
            <a href="{{ route('index') }}" class="btn btn-primary mt-3">Kembali ke Beranda</a>
        </div>
    </div>
</div>
@endsection