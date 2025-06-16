@extends('layout.main')
@section('title', 'jadwal')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lihat jadwal</h3>
                        {{-- <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" title="Collapse">
                                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-lte-toggle="card-remove" title="Remove">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>    
                                <th>NO</th>
                                <td>{{ $jadwal->no }}</td>
                            </tr>
                            <tr>
                                <th>Hari</th>
                                <td>{{ $jadwal->hari }}</td>
                            </tr>
                            <tr>
                                <th>Mata Kuliah</th>
                                <td>{{ $jadwal->mata_kuliah }}</td>
                            </tr>
                            <tr>
                                <th>Dosen</th>
                                <td>{{ $jadwal->dosen }}</td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td>{{ $jadwal->kelas }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('jadwal.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                        <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="btn btn-warning mt-3">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
