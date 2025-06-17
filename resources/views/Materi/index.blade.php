@extends('layout.main')
@section('title', 'materi')

@section('content')
<!--begin::Row-->
<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Materi Pekuliahan</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('materi.create') }}" class="btn btn-primary mb-3">Tambah</a>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>NO</th>
                            <th>MATA KULIAH</th>
                            <th>DOSEN</th>
                            <th>KELAS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materi as $item)
                        <tr>
                            <td>{{ $item->no }}</td>
                            <td>{{ $item->mata_kuliah }}</td>
                            <td>{{ $item->dosen }}</td>
                            <td>{{ $item->kelas }}</td>
                            <td>
                                <a href="{{ route('materi.show', $item->id) }}" class="btn btn-info btn-sm">Show</a>
                                <a href="{{ route('materi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('materi.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm show_confirm"
                                        data-nama="{{ $item->Mata_Kuliah }}">Delete</button>
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
