<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            padding: 15px;
        }
        .sidebar a {
            display: block;
            color: #fff;
            padding: 10px;
            margin-bottom: 5px;
            text-decoration: none;
            border-radius: 5px;
        }
        .sidebar a:hover,
        .sidebar .active-link {
            background-color: #495057;
        }
        .accordion-button {
            color: #fff;
        }
        .accordion-button:not(.collapsed) {
            background-color: #495057;
        }
        .accordion-body a {
            color: #fff;
            padding-left: 30px;
            display: block;
        }
        .accordion-body a:hover,
        .accordion-body .active-link {
            background-color: #6c757d;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <h4 class="text-white">E-Learning</h4>
            <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard*') ? 'active-link' : '' }}">
                <i class="bi bi-graph-up me-2"></i> Dashboard
            </a>

            <div class="accordion" id="sidebarAccordion">
                <div class="accordion-item bg-transparent border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button bg-transparent text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAkademik" aria-expanded="false" aria-controls="collapseAkademik">
                            <i class="bi bi-book me-2"></i> Akademik
                        </button>
                    </h2>
                    <div id="collapseAkademik" class="accordion-collapse collapse {{ request()->is('materi*') || request()->is('jadwal*') || request()->is('nilai*') ? 'show' : '' }}" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body p-0">
                           <!-- <a href="{{ route('absen.index') }}" class="{{ request()->is('absen*') ? 'active-link' : '' }}">Absen</a> -->
                            <a href="{{ route('materi.index') }}" class="{{ request()->is('materi*') ? 'active-link' : '' }}">Materi</a>
                            <a href="{{ route('jadwal.index') }}" class="{{ request()->is('jadwal*') ? 'active-link' : '' }}">Jadwal</a>
                            <a href="{{ route('nilai.index') }}" class="{{ request()->is('nilai*') ? 'active-link' : '' }}">Nilai</a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item bg-transparent border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button bg-transparent text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseUser">
                            <i class="bi bi-person-gear me-2"></i> User
                        </button>
                    </h2>
                    <div id="collapseUser" class="accordion-collapse collapse {{ request()->is('dosen*') || request()->is('mahasiswa*') ? 'show' : '' }}" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body p-0">
                            <a href="{{ route('dosen.index') }}" class="{{ request()->is('dosen*') ? 'active-link' : '' }}">Dosen</a>
                            <a href="{{ route('mahasiswa.index') }}" class="{{ request()->is('mahasiswa*') ? 'active-link' : '' }}">Mahasiswa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-10">
            <nav class="navbar navbar-expand navbar-dark bg-dark">
                <div class="container-fluid justify-content-end">
                    <span class="navbar-text text-white me-3">
                        <i class="bi bi-person-circle"></i> {{ Auth::check() ? Auth::user()->name : 'Guest' }}
                    </span>
                </div>
            </nav>
            <div class="container mt-4">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            title: "Berhasil!",
            text: "{{ session('success') }}",
            icon: "success"
        });
    });
</script>
@endif

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const deleteButtons = document.querySelectorAll('.show_confirm');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                const form = this.closest("form");

                Swal.fire({
                    title: "Apakah Anda yakin?",
                    text: "Data yang dihapus tidak bisa dikembalikan!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, hapus!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>

@stack('scripts')
</body>
</html>
