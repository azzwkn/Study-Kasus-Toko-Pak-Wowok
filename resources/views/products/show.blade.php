@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')

    <div class="page-heading">
        <h1>Detail Produk</h1>
        <p>Informasi lengkap produk.</p>
    </div>

    <div class="detail-container">
        <div class="detail-header">
            <h2>{{ $product->name }}</h2>
        </div>

        <div class="detail-info">
            <div class="detail-item">
                <span>Kategori</span>
                <strong>{{ $product->category->name }}</strong>
            </div>

            <div class="detail-item">
                <span>Harga</span>
                <strong>Rp {{ number_format($product->price, 0, ',', '.') }}</strong>
            </div>

            <div class="detail-item">
                <span>Stok</span>
                <strong>{{ $product->stock }} unit</strong>
            </div>
        </div>

        <div class="detail-actions">
            <a href="{{ route('products.index') }}" class="back-button">
                Kembali
            </a>

            <a href="{{ route('products.edit', $product->id) }}" class="button">
                Edit Produk
            </a>
        </div>
    </div>

@endsection
