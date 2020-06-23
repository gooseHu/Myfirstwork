<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1 shrink-to-fit=no" name="viewport">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<nav class=" navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">TODOS APP</a>
    <button class="navbar-toggler d-lg-none" type="button"
            data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/todos">Todos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/todos/{todos}/create">Create</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container pt-5">
    @if(session()->has('success-info'))
        <div class="pt-sm-3">
            <div class="alert alert-success mt-2" role="alert">
                {{session('success-info')}}
            </div>
        </div>
    @endif

    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>
</html>
