<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class KatalogController extends Controller
{
    /**
     * Data sementara berupa array (hari ke-8 akan diganti database).
     * Harga dan stok memakai integer.
     */
    private function dataProduk(): array
    {
        return [
            ['id' => 1, 'nama' => 'Kopi Ende',    'kategori' => 'Minuman',  'harga' => 15000, 'stok' => 12],
            ['id' => 2, 'nama' => 'Roti Cokelat', 'kategori' => 'Makanan',  'harga' => 8000,  'stok' => 0],
            ['id' => 3, 'nama' => 'Teh Kotak',    'kategori' => 'Minuman',  'harga' => 5000,  'stok' => 0],
            ['id' => 4, 'nama' => 'Keripik Pisang', 'kategori' => 'Makanan', 'harga' => 10000, 'stok' => 25],
            ['id' => 5, 'nama' => 'Air Mineral',  'kategori' => 'Minuman',  'harga' => 3500,  'stok' => 40],
        ];
    }

    public function index(Request $request): View
    {
        $q = trim((string) $request->query('q', ''));
        $produk = $this->dataProduk();

        // Pengayaan: pencarian nama produk lewat query string (?q=kopi)
        if ($q !== '') {
            $produk = array_values(array_filter(
                $produk,
                fn ($p) => str_contains(mb_strtolower($p['nama']), mb_strtolower($q))
            ));
        }

        return view('katalog.index', compact('produk', 'q'));
    }

    public function show(int $id): View
    {
        $item = collect($this->dataProduk())->firstWhere('id', $id);

        if ($item === null) {
            abort(404);
        }

        return view('katalog.show', compact('item'));
    }
}
