<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>

<h2>Data Siswa</h2>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<a href="{{ route('siswa.create') }}">+ Tambah Siswa</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Nilai</th>
        <th>Aksi</th>
    </tr>

    @foreach($siswa as $index => $s)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->umur }}</td>
        <td>{{ $s->nilai }}</td>
        <td>
            <a href="{{ route('siswa.edit', $s->id) }}">Edit</a>

            <form action="{{ route('siswa.destroy', $s->id) }}" 
                  method="POST" 
                  style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>