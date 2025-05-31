<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - E-Learning</title>
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
                <a href="{{ route('materi.index') }}" class="{{ request()->is('materi*') ? 'active-link' : '' }}">
                    <i class="bi bi-journal-text me-2"></i> Materi
                </a>
                <a href="{{ route('quiz.index') ?? '#' }}">
                    <i class="bi bi-patch-question me-2"></i> Kuis
                </a>
                <a href="{{ route('siswa.index') ?? '#' }}">
                    <i class="bi bi-people me-2"></i> Siswa
                </a>
                <a href="{{ route('dashboard') ?? '#' }}">
                    <i class="bi bi-graph-up me-2"></i> Dashboard
                </a>
                <a href="#">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </a>
            </div>

            <!-- Content -->
            <div class="col-md-10 p-4">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
