@extends('layout.main')
@section('title', 'Rekap Absensi')

@section('content')
<div class="container">
    <h4>Rekap Absensi Mahasiswa</h4>

    <table class="table table-bordered table-sm text-center">
        <thead class="table-dark">
            <tr>
                <th>Nama Mahasiswa</th>
                @for ($i = 1; $i <= 18; $i++) {{-- Jumlah pertemuan --}}
                    <th>{{ $i }}</th>
                @endfor
                <th>Presentase</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs->nama }}</td>
                    @php
                        $hadir = 0;
                        $total = 0;
                    @endphp
                    @for ($i = 1; $i <= 18; $i++)
                        @php
                            $absen = $mhs->absensi->firstWhere('pertemuan_ke', $i);
                            $status = $absen?->status ?? '-';
                            if ($status != '-') $total++;
                            if ($status == 'H') $hadir++;
                        @endphp
                        <td class="@if($status == 'H') table-success 
                                   @elseif($status == 'I') table-warning 
                                   @elseif($status == 'A') table-danger 
                                   @else table-secondary 
                                   @endif">
                            {{ $status }}
                        </td>
                    @endfor
                    <td>{{ $total > 0 ? round(($hadir / $total) * 100, 2) : 0 }}%</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
