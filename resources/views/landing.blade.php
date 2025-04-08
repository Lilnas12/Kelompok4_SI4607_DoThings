@extends('layouts.app')

@section('title', 'Beranda | DoThings')

@section('content')

{{-- Hero Section --}}
<section class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4 fw-bold">Bersama Kita Bisa Membantu Sesama</h1>
        <p class="lead">DoThings adalah platform donasi yang transparan, cepat, dan aman untuk membantu mereka yang membutuhkan.</p>
        <a href="#donasi" class="btn btn-light btn-lg mt-3">Mulai Donasi</a>
    </div>
</section>

{{-- About Section --}}
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Kenapa Memilih DoThings?</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="p-4 border rounded shadow-sm h-100 bg-white">
                    <i class="bi bi-shield-lock-fill fs-2 text-primary mb-3"></i>
                    <h5>Transparan</h5>
                    <p>Setiap transaksi donasi dapat dipantau secara terbuka dan jujur.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 border rounded shadow-sm h-100 bg-white">
                    <i class="bi bi-lightning-fill fs-2 text-primary mb-3"></i>
                    <h5>Cepat</h5>
                    <p>Proses donasi yang mudah dan cepat tanpa hambatan teknis.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 border rounded shadow-sm h-100 bg-white">
                    <i class="bi bi-shield-check fs-2 text-primary mb-3"></i>
                    <h5>Aman</h5>
                    <p>Keamanan data dan transaksi Anda adalah prioritas utama kami.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA Section --}}
<section id="donasi" class="py-5 text-center text-white" style="background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('https://source.unsplash.com/1600x600/?donation,help') center/cover no-repeat;">
    <div class="container">
        <h2 class="display-5 fw-bold">Yuk, Jadi Bagian dari Kebaikan!</h2>
        <p class="lead">Bantu sesama dengan berdonasi sekarang.</p>
        {{-- <a href="{{ route('donasi.index') }}" class="btn btn-light btn-lg">Donasi Sekarang</a> --}}
    </div>
</section>

{{-- Footer Space --}}
<div class="mb-5"></div>

@endsection
