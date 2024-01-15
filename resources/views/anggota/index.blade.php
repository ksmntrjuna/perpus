<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto p-4">
        <!-- Bagian Header -->
        <h1 class="text-2xl font-bold mb-4">Daftar Anggota</h1>

        <!-- Tombol Tambah Anggota -->
        <a href="{{ route('anggota.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Tambah Anggota</a>

        <!-- Bagian Tabel -->
        <div class="overflow-x-auto mt-4">
            <!-- Tabel Daftar Anggota -->
            <table class="min-w-full border border-collapse">
                <!-- Header Tabel -->
                <thead>
                    <tr>
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-4 py-2">Nama</th>
                        <th class="border px-4 py-2">Email</th>
                        <th class="border px-4 py-2">No. HP</th>
                        <th class="border px-4 py-2">Alamat</th>
                        <th class="border px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <!-- Isi Tabel -->
                <tbody>
                    <!-- Loop untuk setiap anggota dan menampilkan informasi -->
                    @foreach($anggota as $a)
                    <tr>
                        <!-- Sel Data Anggota -->
                        <td class="border px-4 py-2">{{ $a->id }}</td>
                        <td class="border px-4 py-2">{{ $a->nama }}</td>
                        <td class="border px-4 py-2">{{ $a->email }}</td>
                        <td class="border px-4 py-2">{{ $a->no_hp }}</td>
                        <td class="border px-4 py-2">{{ $a->alamat }}</td>
                        <td class="border px-4 py-2">
                            <!-- Tautan "Detail" dan "Edit" -->
                            <a href="{{ route('anggota.show', $a->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Detail</a>
                            <a href="{{ route('anggota.edit', $a->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                            <!-- Form untuk Menghapus Anggota -->
                            <form action="{{ route('anggota.destroy', $a->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <!-- Tombol Hapus Anggota -->
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>