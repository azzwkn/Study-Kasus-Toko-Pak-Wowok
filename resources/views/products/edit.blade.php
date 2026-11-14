@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')

    <div class="page-heading">
        <h1>Edit Produk</h1>
        <p>Ubah informasi produk yang sudah tersimpan.</p>
    </div>

    <div class="form-container">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama Produk</label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $product->name) }}"
                    placeholder="Masukkan nama produk"
                >

                @error('name')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="category_id">
                    <option value="">Pilih Kategori</option>

                    @foreach ($categories as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}
                        >
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
                <input
                    type="number"
                    name="price"
                    value="{{ old('price', $product->price) }}"
                    placeholder="Masukkan harga"
                >

                @error('price')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input
                    type="number"
                    name="stock"
                    value="{{ old('stock', $product->stock) }}"
                    placeholder="Masukkan jumlah stok"
                >

                @error('stock')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="button">Simpan Perubahan</button>
                <a href="{{ route('products.index') }}" class="back-button">Kembali</a>
            </div>
        </form>
    </div>

@endsection
