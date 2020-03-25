<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <title>Gerar seu certificado</title>
</head>
<body>
    <div class='container mt-5' >

    <h1>Digite o código público projeto para receber o certificado</h1>

        <form action="{{url('/projeto/certificado')}}" method="post">
            @csrf
            <div class="form-group">
                    <input type="codigo" name="codigo"  id=""
                       class="form-control"  placeholder="Insira o código público do projeto para receber o certificado
                    ">
                    <button type="submit" class="btn btn-outline-warning btn-block mt-3"> Receber</button>

            </div>
        </form>
            
            
    </div>
</body>
</html>