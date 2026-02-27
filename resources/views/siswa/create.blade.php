<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>

<h2>Tambah Data Siswa</h2>

<a href="{{ route('siswa.index') }}">Kembali</a>

<br><br>

@if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf

    Nama:
    <input type="text" name="nama"><br><br>

    Umur:
    <input type="number" name="umur"><br><br>

    Nilai:
    <input type="text" name="nilai"><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>