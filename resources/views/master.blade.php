<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-2 px-4">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('klaim.index') }}">Klaim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hasil_integrasi.index') }}">Hasil Integrasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('log_aktivitas.index') }}">Log Aktivitas</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        
        @yield('content')
        
    </div>
    
</body>
</html>