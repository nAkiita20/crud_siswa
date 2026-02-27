<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>

<h2>Edit Data Siswa</h2>

<a href="{{ route('siswa.index') }}">Kembali</a>

<br><br>

@if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    Nama:
    <input type="text" name="nama" value="{{ $siswa->nama }}"><br><br>

    Umur:
    <input type="number" name="umur" value="{{ $siswa->umur }}"><br><br>

    Nilai:
    <input type="text" name="nilai" value="{{ $siswa->nilai }}"><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>