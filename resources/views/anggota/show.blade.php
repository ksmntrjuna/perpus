<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="max-w-md w-full">
        <!-- Bagian Konten Detail Anggota -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <!-- Judul Halaman -->
            <h1 class="text-2xl font-bold mb-4">Detail Anggota</h1>

            <!-- Informasi Anggota -->
            <div>
                <p><strong>Nama:</strong> {{ $anggota->nama }}</p>
                <p><strong>Email:</strong> {{ $anggota->email }}</p>
                <p><strong>No. HP:</strong> {{ $anggota->no_hp }}</p>
                <p><strong>Alamat:</strong> {{ $anggota->alamat }}</p>
            </div>

            <!-- Tombol Kembali ke Daftar Anggota -->
            <div class="mt-6">
                <a href="{{ route('anggota.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded inline-block">Kembali ke Daftar Anggota</a>
            </div>
        </div>
    </div>
</body>

</html>