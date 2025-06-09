@extends('layout.main')
@section('title', 'Materi')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lihat Materi</h3>
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
                                <th>Mata Kuliah</th>
                                <td>{{ $materi->mata_kuliah }}</td>
                            </tr>
                            <tr>
                                <th>Dosen</th>
                                <td>{{ $materi->dosen }}</td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td>{{ $materi->kelas }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('materi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                        <a href="{{ route('materi.edit', $materi->no) }}" class="btn btn-warning mt-3">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
