@extends('layouts.app')

@section('title', $item['nama'])

@section('content')
    <h1>{{ $item['nama'] }}</h1>

    <dl class="detail">
        <dt>Kategori</dt><dd>{{ $item['kategori'] }}</dd>
        <dt>Harga</dt><dd>Rp {{ number_format($item['harga'], 0, ',', '.') }}</dd>
        <dt>Stok</dt><dd><x-status-stok :stok="$item['stok']" /></dd>
    </dl>

    <p><a href="{{ route('katalog.index') }}">&larr; Kembali ke katalog</a></p>
@endsection
