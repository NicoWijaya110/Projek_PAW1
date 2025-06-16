@extends('layout.main')
@section('title', 'Dosen')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lihat Dosen</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>NO</th>
                                <td>{{ $dosen->NO }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $dosen->nama }}</td>
                            </tr>
                            <tr>
                                <th>Tahun Masuk</th>
                                <td>{{ $dosen->Tahun_Masuk }}</td>
                            </tr>
                            <tr>
                                <th>Foto</th>
                                <td>
                                    @if($dosen->foto)
                                        <img src="{{ asset('images/' . $dosen->foto) }}" width="100" alt="Foto Dosen">
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        </table>
                        <a href="{{ route('dosen.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                        <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning mt-3">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
