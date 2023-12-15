@extends('layouts.theme.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>BAN DAI</title>
</head>
<body>

<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BAN DAI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>

<div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
    <div class="bg-dark p-4">
        <h5 class="text-body-emphasis h4">Collapsed content</h5>
        <span class="text-body-secondary">Toggleable via the navbar brand.</span>
    </div>
</div>

<br>
<br>


<div class="container mt-0">
    <h2 class="text-center">Tabla de Ventas</h2>

    <br>
<br>

<br>
    
    <div class="table-container mr-3">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th></th>
                
                    <th>ID</th>
                    <th>Total</th>
                    <th>Artículos</th>
                    <th>Efectivo</th>
                    <th>Cambio</th>
                    <th>Estado</th>
                    <th>Usuario</th>

                    
                    
                    
                </tr>
            </thead>
            <tbody>
            @foreach (DB::select('SELECT * FROM sales') as $sale)
            <tr>
            <td>{{ $sale->id }}</td>

                <td>{{ $sale->id }}</td>
                <td>{{ $sale->total }}</td>
                <td>{{ $sale->items }}</td>
                <td>{{ $sale->cash }}</td>
                <td>{{ $sale->change }}</td>
                <td>{{ $sale->status }}</td>
                <td>{{ $sale->user_id }}</td>
            </tr>
            @endforeach
                
            </tbody>
        </table>
        
    </div>
</div>

<div class="dropdown-item">
    <a href="{{url('categories')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
            <polyline points="16 17 21 12 16 7"></polyline>
            <line x1="21" y1="12" x2="9" y2="12"></line>
        </svg> <span>Salir</span>
    </a>
</div>



<footer class="text-center mt-5">
    <p> 2023 BAN DAI. Todos los derechos reservados.</p>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

