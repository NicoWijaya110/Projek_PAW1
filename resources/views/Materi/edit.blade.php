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
                            <label class="form-label">Mata Kuliah</label>
                            <input type="text" class="form-control" name="mata_kuliah" value="{{ old('mata_kuliah', $materi->mata_kuliah) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Dosen</label>
                            <input type="text" class="form-control" name="dosen" value="{{ old('dosen', $materi->dosen) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <input type="text" class="form-control" name="kelas" value="{{ old('kelas', $materi->kelas) }}">
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