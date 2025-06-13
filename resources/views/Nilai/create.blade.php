@extends('layout.main')
@section('title', 'Nilai')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">Tambah Nilai</div>
                </div>

                <form action="{{ route('nilai.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                            <input type="text" class="form-control" name="mata_kuliah" value="{{ old('mata_kuliah') }}">
                            @error('nama_mata_kuliah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tugas" class="form-label">Tugas</label>
                            <input type="number" class="form-control" name="tugas" value="{{ old('tugas') }}" min="0" max="100">
                            @error('nilai_tugas')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kuis" class="form-label">Kuis</label>
                            <input type="number" class="form-control" name="kuis" value="{{ old('kuis') }}" min="0" max="100">
                            @error('kuis')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="uts" class="form-label">UTS</label>
                            <input type="number" class="form-control" name="uts" value="{{ old('uts') }}" min="0" max="100">
                            @error('uts')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="uas" class="form-label">UAS</label>
                            <input type="number" class="form-control" name="uas" value="{{ old('uas') }}" min="0" max="100">
                            @error('uas')
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
