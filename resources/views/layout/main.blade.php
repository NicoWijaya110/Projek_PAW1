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
            min-height: 100vh;
            background-color: #343a40;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .active-link {
            background-color: #495057;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="#">E-Learning</a>
        <div class="ms-auto d-flex align-items-center text-white">
            <i class="bi bi-person-circle me-2"></i> Admin
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar pt-4">
                <a href="{{ route('dashboard.index') }}" class="{{ request()->is('dashboard.index') ? 'active-link' : '' }}">
                <i class="bi bi-graph-up me-2"></i> Dashboard
                </a>
                <a href="{{ route('materi.index') }}" class="{{ request()->is('materi*') ? 'active-link' : '' }}">
                    <i class="bi bi-journal-text me-2"></i> Materi
                </a>
                <a href="{{ route('jadwal.index') }}" class="{{ request()->is('jadwal*') ? 'active-link' : '' }}">
                    <i class="bi bi-calendar3 me-2"></i> Jadwal
                </a>
                 <a href="">
                    <i class="bi bi-patch-question me-2"></i> Nilai
                </a>
                <a href="{{ route('dosen.index') }}" class="{{ request()->is('dosen*') ? 'active-link' : '' }}">
                    <i class="bi bi-people me-2"></i> Dosen
                </a>
                <a href="{{ route('mahasiswa.index') }}" class="{{ request()->is('mahasiswa*') ? 'active-link' : '' }}">
                    <i class="bi bi-people me-2"></i> Mahasiswa
                </a>
            </div>

            <!-- Content -->
            <div class="col-md-10 p-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
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