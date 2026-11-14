@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')

    <div class="page-heading">
        <h1>Daftar Produk</h1>
        <p>Berbagai produk yang tersedia di toko kami.</p>
    </div>

    <div class="product-tools">
        <form action="{{ route('products.index') }}" method="GET" class="search-form">
            <input
                type="text"
                name="search"
                placeholder="Cari nama produk..."
                value="{{ request('search') }}"
            >
            <button type="submit">Cari</button>
        </form>

        <a href="{{ route('products.create') }}" class="button">
            + Tambah Produk
        </a>
    </div>

    @if (request('search'))
        <p class="search-info">
            Hasil pencarian untuk: <strong>{{ request('search') }}</strong>
        </p>
    @endif

    <div class="product-table">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="product-name">{{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('products.show', $product->id) }}" class="action-detail">Detail</a>

                                <a href="{{ route('products.edit', $product->id) }}" class="action-edit">Edit</a>

                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-delete">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="empty-message">
                            Produk tidak ditemukan.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
