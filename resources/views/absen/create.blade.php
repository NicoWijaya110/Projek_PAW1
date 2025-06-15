@extends('layout.main')
@section('title', 'Input Absen')

@section('content')
<div class="container">
    <h4>Input Absensi</h4>
    <form action="{{ route('absensi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Mahasiswa</label>
            <select name="mahasiswa_id" class="form-control">
                @foreach($mahasiswa as $m)
                <option value="{{ $m->id }}">{{ $m->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Mata Kuliah</label>
            <select name="materi_id" class="form-control">
                @foreach($materi as $mat)
                <option value="{{ $mat->id }}">{{ $mat->mata_kuliah ?? $mat->judul }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Pertemuan Ke</label>
            <input type="number" name="pertemuan_ke" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="H">Hadir</option>
                <option value="I">Izin</option>
                <option value="A">Alpha</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
