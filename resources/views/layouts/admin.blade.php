<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .sidebar {
            width: 250px;
            min-height: 100vh;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: rgba(255,255,255,0.1);
        }
    </style>

    @stack('styles')
</head>
<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <aside class="sidebar bg-dark p-3">
        <h4 class="text-center text-white mb-4">Invoice System</h4>

        <ul class="nav flex-column gap-1">

            {{-- Dashboard --}}
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link text-white">
                    Dashboard
                </a>
            </li>


        </ul>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="flex-grow-1">

        <!-- TOP NAVBAR -->
        <nav class="navbar navbar-light bg-light px-4">
            <span>
                👤 {{ auth()->user()->name }}
                <small class="text-muted">({{ auth()->user()->getRoleNames()->first() }})</small>
            </span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-danger btn-sm">Logout</button>
            </form>
        </nav>

        <!-- PAGE CONTENT -->
        <main class="container-fluid p-4">
            @yield('content')
        </main>

    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')
</body>
</html>
