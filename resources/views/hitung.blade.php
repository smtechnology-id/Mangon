@extends('layouts.app')

@section('content')
@php
$questions = [
'Dekat perkantoran, sekolah, pusat perbelanjaan?',
'Terlihat dari jalan raya?',
'Kepadatan lalu lintas?',
'Kepadatan penduduk dan pejalan kaki?',
'Tempat parkir memadai/tidak?',
'Jumlah pesaing di sekitar?',
'Suasana sekitar nyaman atau tidak untuk kedai minuman?',
'Ketersediaan tempat duduk?'
];

$labels = [
['Jauh', 'Dekat'],
['Tidak Terlihat', 'Terlihat'],
['Sepi', 'Ramai'],
['Sepi', 'Ramai'],
['Tidak Memadai', 'Memadai'],
['Sedikit', 'Banyak'],
['Tidak Nyaman', 'Nyaman'],
['Tidak Tersedia', 'Tersedia']
];
@endphp
<!-- start portfolio area -->
<section class="home1 portfolio pt-120 pb-90" id="portfolio">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    
    <div class="row">
        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
            <div class="section-title wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                <h2>Hitung </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim to eismud </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       Data 1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h5 class="text-center">Data 1</h5>
                        @php
                        $data1 = $value->where('data', 1)->first();
                        @endphp
                        <form action="{{ route('hitung.store') }}" method="POST" class="survey-form">
                            @csrf
                            <div class="form-group card p-5 mb-3">
                                <label for="nama_toko">Nama Toko <span class="text-danger">*</span></label>
                                <input type="text" name="nama_toko" class="form-control" required
                                    style="border-radius: 5px; border: 1px solid #007bff; padding: 10px; font-size: 16px;"
                                    value="{{ $data1 ? $data1->nama_toko : '' }}">
                                <input type="hidden" name="data" value="1">
                                <input type="hidden" name="kode" value="{{ $kode }}">
                            </div>
                            @foreach (range(1, 8) as $index)
                            <div class="form-group card p-5 mb-3">
                                <label for="">{{ $index }}. {{ $questions[$index - 1] }} <span
                                        class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col-md-1 text-center">
                                        {{ $labels[$index - 1][0] }}
                                    </div>
                                    @for ($i = 1; $i <= 5; $i++) <div
                                        class="col-md-2 d-flex align-items-center justify-content-center">
                                        <input type="radio" name="v{{ $index }}" value="{{ $i }}" class="survey-option"
                                            required {{ $data1 && $data1['value'.$index]==$i ? 'checked' : '' }}>
                                        <label for="">{{ $i }}</label>
                                </div>
                                @endfor
                                <div class="col-md-1 text-center">
                                    {{ $labels[$index - 1][1] }}
                                </div>
                            </div>
                    </div>
                    @endforeach
                    @if (!$data1)
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    @endif
                    </form>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Data 2
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h5 class="text-center">Data 2</h5>
                        @php
                        $data2 = $value->where('data', 2)->first();
                        @endphp
                        <form action="{{ route('hitung.store') }}" method="POST" class="survey-form">
                            @csrf
                            <div class="form-group card p-5 mb-3">
                                <label for="nama_toko">Nama Toko <span class="text-danger">*</span></label>
                                <input type="text" name="nama_toko" class="form-control" required
                                    style="border-radius: 5px; border: 1px solid #007bff; padding: 10px; font-size: 16px;"
                                    value="{{ $data2 ? $data2->nama_toko : '' }}">
                                <input type="hidden" name="data" value="2">
                                <input type="hidden" name="kode" value="{{ $kode }}">
                            </div>
                            @foreach (range(1, 8) as $index)
                            <div class="form-group card p-5 mb-3">
                                <label for="">{{ $index }}. {{ $questions[$index - 1] }} <span
                                        class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col-md-1 text-center">
                                        {{ $labels[$index - 1][0] }}
                                    </div>
                                    @for ($i = 1; $i <= 5; $i++) <div
                                        class="col-md-2 d-flex align-items-center justify-content-center">
                                        <input type="radio" name="v{{ $index }}" value="{{ $i }}" class="survey-option"
                                            required {{ $data2 && $data2['value'.$index]==$i ? 'checked' : '' }}>
                                        <label for="">{{ $i }}</label>
                                </div>
                                @endfor
                                <div class="col-md-1 text-center">
                                    {{ $labels[$index - 1][1] }}
                                </div>
                            </div>
                    </div>
                    @endforeach
                    @if (!$data2)
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    @endif
                    </form>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Data 3
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <h5 class="text-center">Data 3 </h5>
                        @php
                        $data3 = $value->where('data', 3)->first();
                        @endphp
                        <form action="{{ route('hitung.store') }}" method="POST" class="survey-form">
                            @csrf
                            <div class="form-group card p-5 mb-3">
                                <label for="nama_toko">Nama Toko <span class="text-danger">*</span></label>
                                <input type="text" name="nama_toko" class="form-control" required
                                    style="border-radius: 5px; border: 1px solid #007bff; padding: 10px; font-size: 16px;"
                                    value="{{ $data3 ? $data3->nama_toko : '' }}">
                                <input type="hidden" name="data" value="3">
                                <input type="hidden" name="kode" value="{{ $kode }}">
                            </div>
                            @foreach (range(1, 8) as $index)
                            <div class="form-group card p-5 mb-3">
                                <label for="">{{ $index }}. {{ $questions[$index - 1] }} <span
                                        class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col-md-1 text-center">
                                        {{ $labels[$index - 1][0] }}
                                    </div>
                                    @for ($i = 1; $i <= 5; $i++) <div
                                        class="col-md-2 d-flex align-items-center justify-content-center">
                                        <input type="radio" name="v{{ $index }}" value="{{ $i }}" class="survey-option"
                                            required {{ $data3 && $data3['value'.$index]==$i ? 'checked' : '' }}>
                                        <label for="">{{ $i }}</label>
                                </div>
                                @endfor
                                <div class="col-md-1 text-center">
                                    {{ $labels[$index - 1][1] }}
                                </div>
                            </div>
                    </div>
                    @endforeach
                    @if (!$data3)
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <a href="{{ route('result', $kode) }}" class="btn btn-primary">Mulai Perhitungan</a>
        </div>
    </div>
    

</section>
@endsection

<style>
    /* Tambahkan CSS berikut untuk memperbaiki tampilan kartu */
    .card {
        background-color: #f8f9fa;
        /* Warna latar belakang kartu */
        border: 1px solid #dee2e6;
        /* Warna border */
        border-radius: 8px;
        /* Sudut melengkung */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Bayangan halus */
        transition: transform 0.2s;
        /* Animasi saat hover */
    }

    .card:hover {
        transform: scale(1.02);
        /* Membesar saat hover */
    }

    .survey-option {
        width: 40px;
        /* Ukuran lingkaran diperbesar */
        height: 40px;
        /* Ukuran lingkaran diperbesar */
        accent-color: #007bff;
        /* Warna lingkaran */
    }

    .survey-form label {
        display: flex;
        align-items: center;
        margin-left: 10px;
        /* Jarak antara radio dan label diperbesar */
        font-size: 22px;
        /* Ukuran font diperbesar */
        color: #333;
        /* Warna teks */
    }

    .survey-form .row {
        justify-content: space-between;
        /* Rata tengah */
    }

    .survey-form .col-md-2 {
        text-align: center;
        /* Rata tengah teks */
    }

    .survey-form .col-md-2 label {
        cursor: pointer;
        /* Pointer saat hover */
        transition: transform 0.2s;
        /* Animasi saat hover */
    }

    .survey-form .col-md-2 label:hover {
        transform: scale(1.1);
        /* Membesar saat hover */
    }
</style>