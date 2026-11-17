@props(['stok'])

@if ($stok > 0)
    <span class="badge badge-ok">Tersedia ({{ $stok }})</span>
@else
    <span class="badge badge-habis">Habis</span>
@endif
