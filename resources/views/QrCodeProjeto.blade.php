<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <title>QR code do projeto</title>
</head>
<body>
    <div class='container mt-5' >

    <h1>QR code do projeto</h1>

            <img src="{{url('/projeto/'.$id_projeto)}}" width="300" class="img-thumbnail img-fluid" alt="">
            
    </div>
</body>
</html>