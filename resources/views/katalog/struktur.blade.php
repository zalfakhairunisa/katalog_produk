<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog produk Toko</title>
    <!-- Bootstrap CSS agar tampilan otomatis rapi dan berwarna -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <h1 class="text-center mb-4">Katalog Produk Toko</h1>

        <!-- Bagian inilah yang nanti akan diisi oleh file format.blade.php -->
        @yield('konten')
    </div>

</body>
</html>