@extends('layout.main')
@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Dashboard Admin</h1>
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Materi</h5>
                    <p class="card-text display-4">{{ $jumlahMateri }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Dosen</h5>
                    <p class="card-text display-4">{{ $jumlahDosen }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Mahasiswa</h5>
                    <p class="card-text display-4">{{ $jumlahMahasiswa }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Jadwal</h5>
                    <p class="card-text display-4">{{ $jumlahJadwal }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
