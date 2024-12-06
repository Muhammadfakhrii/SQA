@section('content')
<div class="container">
    <h1>Edit Mahasiswa</h1>
    <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="text" name="nrp" class="form-control" id="nrp" value="{{ $mahasiswa->nrp }}" required>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="jurusan" value="{{ $mahasiswa->jurusan }}" required>
        </div>
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="{{ $mahasiswa->nama_lengkap }}" required>
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="{{ $mahasiswa->tempat_lahir }}">
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}">
        </div>
        <div class="mb-3">
            <label for="hobi" class="form-label">Hobi</label>
            <textarea name="hobi" class="form-control" id="hobi">{{ $mahasiswa->hobi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" id="alamat">{{ $mahasiswa->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            @if($mahasiswa->foto)
                <div>
                    <img src="{{ asset('storage/' . $mahasiswa->foto) }}" alt="Foto Mahasiswa" width="100">
                </div>
            @endif
            <input type="file" name="foto" class="form-control" id="foto">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection