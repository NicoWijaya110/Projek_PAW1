@extends('layout.main')
@section('title', 'Nilai')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lihat Nilai</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Mata Kuliah</th>
                                <td>{{ $nilai->mata_kuliah }}</td>
                            </tr>
                            <tr>
                                <th>Nilai Tugas</th>
                                <td>{{ $nilai->tugas }}</td>
                            </tr>
                            <tr>
                                <th>Nilai Kuis</th>
                                <td>{{ $nilai->kuis }}</td>
                            </tr>
                            <tr>
                                <th>Nilai UTS</th>
                                <td>{{ $nilai->uts }}</td>
                            </tr>
                            <tr>
                                <th>Nilai UAS</th>
                                <td>{{ $nilai->uas }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('nilai.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                        <a href="{{ route('nilai.edit', $nilai->id) }}" class="btn btn-warning mt-3">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
