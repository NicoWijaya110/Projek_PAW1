@extends('layout.main')
@section('title', 'Ubah jadwal')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">Ubah Jadwal</div>
                </div>

                <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">NO</label>
                            <input type="text" class="form-control" name="NO" value="{{ old('NO', $jadwal->NO) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">HARI</label>
                            <input type="text" class="form-control" name="hari" value="{{ old('hari', $jadwal->hari) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">JAM</label>
                            <input type="text" class="form-control" name="jam" value="{{ old('jam', $jadwal->jam) }}">
                        </div>
                    
                    <div class="mb-3">
                        <label class="form-label">MATA KULIAH</label>
                        <input type="text" class="form-control" name="mata_kuliah" value="{{ old('mata_kuliah', $jadwal->mata_kuliah) }}">          
                    </div>
                    <div class="mb-3">  
                        <label class="form-label">KELAS</label>
                        <input type="text" class="form-control" name="kelas" value="{{ old('kelas', $jadwal->kelas) }}">        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">DOSEN</label>
                        <input type="text" class="form-control" name="dosen" value="{{ old('dosen', $jadwal->dosen) }}">    
                    </div>
                    </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection