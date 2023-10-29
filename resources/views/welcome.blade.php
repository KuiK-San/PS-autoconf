<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guilherme Casagrande - PS AUTOCONF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar shadow navbar-expand-lg bg-body-tertiary">
        <div class="container p-2">

            @if (Route::has('login'))
            <div class="nav-item col-2 offset-11"><a href="{{ url('/veiculo') }}" class="nav-link">Acessar sistema</a></div>
            @endif

        </div>
    </nav>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
        <div class="">
            <img src="{{ url('images/logo.png') }}" alt="" style="max-width:500px;">
            <h2 class="mb-0 p-0">Processo Seletivo</h2>
            <p class="mt-0 p-0">Guilherme Casagrande</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>