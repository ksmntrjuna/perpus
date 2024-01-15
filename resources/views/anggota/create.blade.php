<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto p-4">
        <!-- Judul Halaman -->
        <h1 class="text-2xl font-bold mb-4">Tambah Anggota</h1>

        <!-- Menampilkan Pesan Validasi Jika Ada Kesalahan -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                <!-- Menampilkan Setiap Kesalahan -->
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Formulir Tambah Anggota -->
        <form action="{{ route('anggota.store') }}" method="POST" class="max-w-md">
            @csrf
            <!-- Input untuk Nama -->
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
            <input type="text" name="nama" required class="mt-1 p-2 w-full border rounded">

            <!-- Input untuk Email -->
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" name="email" required class="mt-1 p-2 w-full border rounded">

            <!-- Input untuk Nomor HP -->
            <label for="no_hp" class="block text-sm font-medium text-gray-700">No. HP:</label>
            <input type="text" name="no_hp" required class="mt-1 p-2 w-full border rounded">

            <!-- Input untuk Alamat (Textarea) -->
            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat:</label>
            <textarea name="alamat" required class="mt-1 p-2 w-full border rounded"></textarea>

            <!-- Tombol Simpan -->
            <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>

</body>

</html>