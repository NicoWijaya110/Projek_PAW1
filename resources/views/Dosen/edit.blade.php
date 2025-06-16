@extends('layout.main')
@section('title', 'Ubah Dosen')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-primary card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">Ubah Dosen</div>
                </div>

                <form action="{{ route('dosen.update', $dosen->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">NO</label>
                            <input type="text" class="form-control" name="NO" value="{{ old('NO', $dosen->NO) }}">
                            @error('NO')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama', $dosen->nama) }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tahun Masuk</label>
                            <input type="date" class="form-control" name="Tahun_Masuk" value="{{ old('Tahun_Masuk', $dosen->Tahun_Masuk) }}">
                            @error('Tahun_Masuk')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <input type="file" class="form-control" name="foto" accept="image/*">
                            @if($dosen->foto)
                                <div class="mt-2">
                                    <img src="{{ asset('images/' . $dosen->foto) }}" width="100" alt="Foto Dosen">
                                </div>
                            @endif
                            @error('foto')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
