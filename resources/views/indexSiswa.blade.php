@extends('layout')
@section('content')
<title>Home</title>
<div class="container mt-4">
    <div class="header text-center fst-italic">
        <h3>Daftar Siswa</h3>
        <p>Sekolah Merdeka</p>
    </div>
    <div>
        <a class="btn btn-primary mb-2" href="tambah">Tambah</a>
    </div>
    <table class="table">
        <thead class="table-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Update At</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Usia</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($siswa as $Siswa)
        <tr>
            <td>{{ $loop->iteration . '.' }}</td>
            <td>{{ $Siswa->firstName . ' ' . $Siswa->lastName}}</td>
            <td><span class="updated-at" data-updated-at="{{ $Siswa->updated_at->format('Y-m-d\TH:i:s\Z') }}"></span></td>
            <td>{{ $Siswa->jenis_kelamin }}</td>
            <td>{{ $Siswa->jenis_kelamin }}</td>
            <td>{{ $Siswa->usia }}</td>
            <td>
                <a class="btn btn-warning" href="edit/{{ $Siswa->id }}">Edit</a>
                <form action="/delete/{{ $Siswa->id }}" method="POST" style="display:inline;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                </form>
                
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const updateElements = document.querySelectorAll('.updated-at');
        updateElements.forEach(function(element) {
            // Get the UTC time from the data attribute
            const utcTime = new Date(element.getAttribute('data-updated-at'));
            // Convert to local time
            const localTime = utcTime.toLocaleString();
            // Display the local time
            element.textContent = localTime;
        });
    });
    </script>
@endsection