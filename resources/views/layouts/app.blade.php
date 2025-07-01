<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Artees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-custom {
            background-color: #F4A100;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-light">

    @include('components.navbar')

    <div class="container my-4">
        @yield('content')
    </div>

    @include('components.footer')
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
