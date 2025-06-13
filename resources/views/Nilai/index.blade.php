@extends('layout.main')
@section('title', 'Nilai')

@section('content')
<!--begin::Row-->
<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nilai Perkuliahan</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('nilai.create') }}" class="btn btn-primary mb-3">Tambah</a>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Mata Kuliah</th>
                            <th>Nilai Tugas</th>
                            <th>Nilai Kuis</th>
                            <th>Nilai UTS</th>
                            <th>Nilai UAS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilai as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->mata_kuliah }}</td>
                            <td>{{ $item->tugas }}</td>
                            <td>{{ $item->kuis }}</td>
                            <td>{{ $item->uts }}</td>
                            <td>{{ $item->uas }}</td>
                            <td>
                                <a href="{{ route('nilai.show', $item->id) }}" class="btn btn-info btn-sm">Show</a>
                                <a href="{{ route('nilai.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('nilai.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm show_confirm"
                                        data-nama="{{ $item->mata_kuliah }}">Delete</button>
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
