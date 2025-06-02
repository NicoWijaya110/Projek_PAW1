@extends('layout.main')
@section('title', 'Materi')
@section('content')
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline mb-4">
                    <!--begin::Header-->
                    <div class="card-header">
                        <div class="card-title">Tambah Materi</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Form-->
                    <form action="{{ route('materi.store') }}" method="POST">
                        @csrf
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="NO" class="form-label">NO</label>
                                <input type="text" class="form-control" name="NO" value="{{ old('NO') }}">
                            </div>
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label for="MATA_KULIAH" class="form-label">MATA KULIAH</label>
                                <input type="text" class="form-control" name="MATA_KULIAH" value="{{ old('MATA_KULIAH') }}">
                            </div>
                            @error('MATA_KULIAH')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label for="DOSEN" class="form-label">DOSEN</label>
                                <input type="text" class="form-control" name="DOSEN" value="{{ old('DOSEN') }}">
                            </div>
                            @error('DOSEN')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label for="KELAS" class="form-label">KELAS</label>
                                <input type="text" class="form-control" name="KELAS"
                                    value="{{ old('KELAS') }}">
                            </div>
                            @error('KELAS')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <!--end::Footer-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
            <!-- /.card -->
        </div>
    @endsection
