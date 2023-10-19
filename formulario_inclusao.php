<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      
    <h1>Inclusão de usuários</h1>

    <form action="incluir.php" method="get">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome do usuário</label>
        <input type="text" class="form-control" id="nome"
          name="nome" placeholder="Nome completo">
      </div>
       <div class="mb-3">
        <label for="email" class="form-label">Email do usuário</label>
        <input type="email" class="form-control" id="email"
          name="email" placeholder="nome@email">
      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha do usuário</label>
        <input type="text" class="form-control" id="senha"
          name="senha" >
      </div>
      <div class="mb-3">
       
        <input type="submit" class="btn btn-primary btn-lg"           value="Salvar" >
      </div>
      
    </form>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
