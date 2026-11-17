@extends('katalog.struktur')

@section('konten')
    @php
        // DATA PRODUK:  4 
        $produk = [
            ['nama' => 'Baju Kameja', 'harga' => 75000, 'stok' => 5],
            ['nama' => 'Sepatu Hitam', 'harga' =>150000, 'stok' => 12],
            ['nama' => 'Sendal fipper', 'harga' => 90000, 'stok' => 0],
            ['nama' => 'Tas Sekolah', 'harga' => 180000, 'stok' => 3],
        ];
    @endphp

    <div class="row">
        {{-- STRUKTUR & LOOP BLADE: Perulangan data produk --}}
        @forelse($produk as $item)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['nama'] }}</h5>
                        
                        {{-- FORMAT: Harga dalam Rupiah --}}
                        <p class="card-text text-primary fw-bold">
                            Rp {{ number_format($item['harga'], 0, ',', '.') }}
                        </p>

                        {{-- KONDISI: Status Stok --}}
                        @if($item['stok'] > 0)
                            <span class="badge bg-success">Stok Tersedia ({{ $item['stok'] }})</span>
                        @else
                            <span class="badge bg-danger">Stok Habis</span>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            {{-- KONDISI: Empty State jika data produk kosong --}}
            <div class="col-12">
                <div class="alert alert-warning text-center" role="alert">
                    Maaf, data produk belum tersedia.
                </div>
            </div>
        @endforelse
    </div>
@endsection