@extends('layout.main')
@section('title', 'Ubah Nilai')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">Ubah Nilai</div>
                </div>

                <form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Mata Kuliah</label>
                            <input type="text" class="form-control" name="mata_kuliah" value="{{ old('mata_kuliah', $nilai->mata_kuliah) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai Tugas</label>
                            <input type="number" class="form-control" name="tugas" value="{{ old('tugas', $nilai->tugas) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai Kuis</label>
                            <input type="number" class="form-control" name="kuis" value="{{ old('kuis', $nilai->kuis) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai UTS</label>
                            <input type="number" class="form-control" name="uts" value="{{ old('uts', $nilai->uts) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai UAS</label>
                            <input type="number" class="form-control" name="uas" value="{{ old('uas', $nilai->uas) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <input type="text" class="form-control" value="{{ ($nilai->tugas + $nilai->kuis + $nilai->uts + $nilai->uas) / 4 >= 70 ? 'Lulus' : 'Tidak Lulus' }}" disabled>
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
