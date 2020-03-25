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

    <h1>Cadastrar projeto</h1>

            <form method="post" action="{{route('store-projeto')}}">
            @csrf
                <div class="form-group">
                    <label for="titulo">Título do projeto</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título do projeto">
                </div>
                <div class="form-group">
                
                    <label for="resumo">Resumo</label>

                    
                    <input type="text" name="resumo" class="form-control" id="resumo" placeholder="Resumo do projeto">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla minima illum reprehenderit assumenda ratione eius libero in? Id dolores delectus unde, optio culpa, laudantium eum perspiciatis officiis natus nobis iure.
                </div>

        <div class="form-grop">
            <button type="submit" class="btn btn-success btn-block">
                Cadastrar projeto
            </button>
        </div>
        </form>
    </div>
</body>
</html>