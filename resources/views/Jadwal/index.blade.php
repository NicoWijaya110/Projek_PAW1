@extends('layout.main')
@section('title', 'Jadwal Perkuliahan')

@section('content')
<!--begin::Row-->
<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Jadwal Perkuliahan</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('materi.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Hari</th>
                            <th>Mata Kuliah</th>
                            <th>Kelas</th>
                            <th>Dosen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $item)
                        <tr>
                            <td>{{ $item->NO }}</td>
                            <td>{{ $item->HARI }}</td>
                            <td>{{ $item->MATA_KULIAH }}</td>
                            <td>{{ $item->KELAS }}</td>
                            <td>{{ $item->DOSEN }}</td>
                            <td>
                                <a href="{{ route('materi.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{ route('materi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('materi.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm show_confirm" data-toggle="tooltip" title='Hapus'
                                        data-nama='{{ $item->MATA_KULIAH }}'>Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!--end::Row-->
@endsection