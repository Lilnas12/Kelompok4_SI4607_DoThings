<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DoThings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    @include('partials.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>
