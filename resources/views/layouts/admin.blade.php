<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Invoice Admin Panel</span>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- LEFT SIDEBAR -->
        <div class="col-md-3 col-lg-2 bg-light min-vh-100 p-3">
            @include('admin.partials.sidebar')
        </div>

        <!-- MAIN CONTENT -->
        <div class="col-md-9 col-lg-10 p-4">

            {{-- Flash message --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')

        </div>

    </div>
</div>

</body>
</html>
