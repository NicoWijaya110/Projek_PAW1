@extends('layout.main')
@section('title', 'jadwal')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline mb-4">
                    <div class="card-header">
                        <div class="card-title">Tambah Jadwal</div>
                    </div>

                    <form action="{{ route('jadwal.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="no" class="form-label">NO</label>
                                <input type="text" class="form-control" name="no" value="{{ old('no') }}">
                            </div>
                            @error('no')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label for="hari" class="form-label">hari</label>
                                <input type="text" class="form-control" name="hari" value="{{ old('hari') }}">
                            </div>
                            @error('hari')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label for="jam" class="form-label">jam</label>
                                <input type="text" class="form-control" name="jam" value="{{ old('jam') }}">
                            </div>
                            @error('jam')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label for="mata_kuliah" class="form-label">MATA KULIAH</label>
                                <input type="text" class="form-control" name="mata_kuliah" value="{{ old('mata_kuliah') }}">
                            <div class="mb-3">
                                <label for="kelas" class="form-label">KELAS</label>
                                <input type="text" class="form-control" name="kelas" value="{{ old('kelas') }}">
                            </div>
                             <div class="mb-3">
                            <label for="dosen" class="form-label">DOSEN</label>
                            <input type="text" class="form-control" name="dosen" value="{{ old('dosen') }}">


                            @error('kelas')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
