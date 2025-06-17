@extends('layout.main')
@section('title', 'Jadwal Perkuliahan')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Jadwal Perkuliahan</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('jadwal.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Mata Kuliah</th>
                            <th>Kelas</th>
                            <th>Dosen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jadwal as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->hari }}</td>
                                <td>{{$item->jam}}</td>
                                <td>{{ $item->mata_kuliah }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>{{ $item->dosen }}</td>
                                <td>
                                    
                                    <a href="{{ route('jadwal.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('jadwal.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('jadwal.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada jadwal</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
