<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <title>Cadastrar projeto</title>
</head>
<body>
    <div class='container mt-5' >


            <div class="card">
        <h5 class="card-header">Projeto</h5>
        <div class="card-body">
            
            <h1 class="card-title">{{$projeto->titulo}}</h1>
            <p class="card-text">{{$projeto->resumo}}</p>
            <a href="{{url('/')}}" class="btn btn-primary">Avaliar</a>
        </div>
        </div>

</body>
</html>