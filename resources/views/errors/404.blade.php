<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/errorPage.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="content text-center">
            <h1 class="display-1">404</h1>
            <h3>Página no encontrada</h3>
            <p>Lo sentimos, pero la página que buscas no existe</p>
            <div class="d-flex align-items-center">
                <span>regresar a</span>
                <a href="{{route('admin')}}" class="btn btn-outline-primary ml-2">Inicio</a>
            </div>
        </div>
    </div>
    
</body>
</html>