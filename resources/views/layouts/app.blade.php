<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Student Management') | Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('css')
    <style>
        body { background: #f5f7fb; color: #202124; }
        .app-header { background: #fff; border-bottom: 4px solid #dc3545; }
        .form-area { background: #fff; border: 1px solid #e6e8ef; border-radius: 12px; padding: 24px; box-shadow: 0 5px 20px rgba(0,0,0,.04); }
        .table-card { border: 1px solid #e6e8ef; border-radius: 12px; overflow: hidden; background: #fff; }
    </style>
</head>
<body>
<nav class="navbar app-header">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('student') }}">Laravel Student CRUD</a>
        <span class="text-muted small">OST Practical Project</span>
    </div>
</nav>
<main class="py-4">
    @yield('content')
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('js')
</body>
</html>
