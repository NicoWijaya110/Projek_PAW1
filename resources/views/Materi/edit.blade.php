@extends('layout.main')
@section('title', 'Ubah Materi')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">Ubah Materi</div>
                </div>

                <form action="{{ route('materi.update', $materi->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                            <input type="text" class="form-control" name="mata_kuliah" value="{{ old('mata_kuliah', $materi->mata_kuliah) }}">
                            @error('mata_kuliah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="dosen" class="form-label">Dosen</label>
                            <input type="text" class="form-control" name="dosen" value="{{ old('dosen', $materi->dosen) }}">
                            @error('dosen')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" class="form-control" name="kelas" value="{{ old('kelas', $materi->kelas) }}">
                            @error('kelas')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
