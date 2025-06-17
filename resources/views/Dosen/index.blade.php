@extends('layout.main')
@section('title', 'Data Dosen')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Dosen</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3">Tambah Dosen</a>
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nomor Dosen</th>
                            <th>Nama</th>
                            <th>Tahun Masuk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dosen as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    @if($item->foto)
                                        <img src="{{ asset('images/' . $item->foto) }}" width="60" alt="Foto Dosen">
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>{{ $item->NO }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->Tahun_Masuk }}</td>
                                <td>
                                    <a href="{{ route('dosen.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('dosen.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('dosen.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm show_confirm" data-nama="{{ $item->nama }}">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data dosen</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('.show_confirm').forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const form = this.closest('form');
            const nama = this.getAttribute('data-nama');

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: `Dosen "${nama}" akan dihapus dan tidak bisa dikembalikan!`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
@endsection
