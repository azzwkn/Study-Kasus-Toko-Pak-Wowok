@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')

    <div class="page-heading">
        <h1>Tambah Produk</h1>
        <p>Masukkan informasi produk yang ingin ditambahkan.</p>
    </div>

    <div class="form-container">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan nama produk">

                @error('name')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="category_id">
                    <option value="">Pilih Kategori</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                @error('category_id')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="price" value="{{ old('price') }}" placeholder="Masukkan harga">

                @error('price')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stock" value="{{ old('stock') }}" placeholder="Masukkan jumlah stok">

                @error('stock')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="button">Simpan Produk</button>
                <a href="{{ route('products.index') }}" class="back-button">Kembali</a>
            </div>
        </form>
    </div>

@endsection
