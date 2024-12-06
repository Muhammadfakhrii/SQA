@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NRP</th>
                <th>Jurusan</th>
                <th>Nama Lengkap</th>
                <th>Tempat & Tanggal Lahir</th>
                <th>Hobi</th>
                <th>Alamat</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $key => $mhs)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $mhs->nrp }}</td>
                <td>{{ $mhs->jurusan }}</td>
                <td>{{ $mhs->nama_lengkap }}</td>
                <td>
                    {{ $mhs->tempat_lahir }}, 
                    {{ \Carbon\Carbon::parse($mhs->tanggal_lahir)->isoFormat('D MMMM YYYY') }}
                </td>
                <td>{{ $mhs->hobi }}</td>
                <td>{{ $mhs->alamat }}</td>
                <td>
                    @if($mhs->foto)
                        <img src="{{ asset('storage/' . $mhs->foto) }}" width="50" />
                    @else
                        Tidak Ada Foto
                    @endif
                </td>
                <td>
                    <a href="{{ route('mahasiswa.edit', $mhs) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('mahasiswa.destroy', $mhs) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection