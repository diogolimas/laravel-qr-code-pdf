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

    <h1>Todos os projetos</h1>
    

    <a href="{{route('cadastar-projeto')}}" class="btn btn-success">Adicionar um projeto</a>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome do projeto</th>
      <th scope="col">Ações</th>
      
    </tr>
    </thead>
    

  
  
  <tbody>
  @forelse($projetos as $projeto)

    <tr>
      <th scope="row">#</th>
      <td>{{$projeto->titulo}}</td>
      <td>
            <a href="{{url('projeto/verQrCode/'.$projeto->id_projeto)}}" class="btn btn-outline-success" >Qr code para avaliação projeto</a>
      </td>
      
    </tr>
    @empty
    @endforelse
  </tbody>
</table>
            
 
    


    </div>
</body>
</html>