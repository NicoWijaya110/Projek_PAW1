@extends('layout.main')
@section('title', 'Mahasiswa')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lihat Mahasiswa</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>NPM</th>
                                <td>{{ $mahasiswa->npm }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $mahasiswa->nama }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $mahasiswa->jk }}</td>
                            </tr>
                            <tr>
                                <th>Tempat, Tanggal Lahir</th>
                                <td>{{ $mahasiswa->tempat_lahir }}, {{ \Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th>Asal SMA</th>
                                <td>{{ $mahasiswa->asal_sma }}</td>
                            </tr>
                            <tr>
                                <th>Foto</th>
                                <td>
                                    @if($mahasiswa->foto)
                                        <img src="{{ asset('images/' . $mahasiswa->foto) }}" width="100" alt="Foto Mahasiswa">
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        </table>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning mt-3">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
