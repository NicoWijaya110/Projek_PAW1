@extends('layout.main')
@section('title', 'Data Absensi')

@section('content')
<div class="container">
    <h4>Rekap Absensi</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mahasiswa</th>
                <th>Mata Kuliah</th>
                <th>Pertemuan Ke</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($absens as $a)
            <tr>
                <td>{{ $a->mahasiswa->nama }}</td>
                <td>{{ $a->materi->mata_kuliah ?? $a->materi->judul }}</td>
                <td>{{ $a->pertemuan_ke }}</td>
                <td>{{ $a->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
