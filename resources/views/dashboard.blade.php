@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="welcome">
        <p class="subtitle">WELCOME TO TOKO KELONTONG PAK WOWOK</p>

        <h1>Belanja kebutuhan,<br>lebih mudah di sini.</h1>

        <p class="description">
            Temukan berbagai kebutuhan sehari-hari anda yang tersedia di toko kami.
        </p>

        <a href="{{ route('products.index') }}" class="button">
            Lihat Daftar Produk
        </a>
    </div>

    <div class="dashboard-info">
        <div class="section-heading">
            <p>INFORMASI TOKO</p>
            <h2>Produk Kami Saat Ini</h2>
        </div>

        <div class="summary">
            <div class="summary-card">
                <p>Total Produk</p>
                <h3>{{ $totalProducts }}</h3>
                <span>Jenis produk tersedia</span>
            </div>

            <div class="summary-card">
                <p>Total Stok</p>
                <h3>{{ $totalStock }}</h3>
                <span>Jumlah seluruh persediaan</span>
            </div>
        </div>
    </div>

@endsection
