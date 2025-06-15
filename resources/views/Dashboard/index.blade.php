@extends('layout.main')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">E-Learning Information</h4>
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title">Mahasiswa</h5>
                    <p class="card-text display-4">{{ $jumlahMahasiswa }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title">Dosen</h5>
                    <p class="card-text display-4">{{ $jumlahDosen }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-info text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jadwal</h5>
                    <p class="card-text display-4">{{ $jumlahJadwal }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title">Materi</h5>
                    <p class="card-text display-4">{{ $jumlahMateri }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-danger text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title">Nilai</h5>
                    <p class="card-text display-4">{{ $jumlahNilai }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
