<!-- resources/views/anggota/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Anggota</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('anggota.update', $anggota->id) }}" method="POST" class="max-w-md">
            @csrf
            @method('PUT')

            <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
            <input type="text" name="nama" value="{{ $anggota->nama }}" required class="mt-1 p-2 w-full border rounded">

            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" name="email" value="{{ $anggota->email }}" required class="mt-1 p-2 w-full border rounded">

            <label for="no_hp" class="block text-sm font-medium text-gray-700">No. HP:</label>
            <input type="text" name="no_hp" value="{{ $anggota->no_hp }}" required class="mt-1 p-2 w-full border rounded">

            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat:</label>
            <textarea name="alamat" required class="mt-1 p-2 w-full border rounded">{{ $anggota->alamat }}</textarea>

            <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</body>

</html>