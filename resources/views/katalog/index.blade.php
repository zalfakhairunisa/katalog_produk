@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
    <h1>Katalog Produk</h1>
    <p>Harga dan stok toko</p>

    <form method="GET" action="{{ route('katalog.index') }}" class="cari">
        <label for="q">Nama produk</label>
        <input id="q" name="q" value="{{ $q }}" placeholder="Cari nama produk…">
        <button>Cari</button>
        @if ($q !== '')
            <a href="{{ route('katalog.index') }}">Reset</a>
        @endif
    </form>

    <table>
        <thead>
            <tr>
                <th>Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produk as $item)
                <tr>
                    <td><a href="{{ route('katalog.show', $item['id']) }}">{{ $item['nama'] }}</a></td>
                    <td>{{ $item['kategori'] }}</td>
                    <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                    <td><x-status-stok :stok="$item['stok']" /></td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="kosong">
                        {{ $q !== '' ? 'Produk tidak ditemukan.' : 'Belum ada produk.' }}
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
