<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Formulário</title>
  <style>
    .navbar {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Meu Formulário</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:antiquewhite">Configurações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:antiquewhite">Perfil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</head>
<body>
  <div class="container">
    <h1>
      Novo usuário
    </h1>
    <form>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputCity">Nome</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputCity">Cpf</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-7">
          <label for="inputAddress">Endereço</label>
          <input type="text" class="form-control" placeholder="Informe um endereço...">
        </div>
        <div class="form-group col-md-2">
          <label for="inputnivel">Nível</label>
          <select id="inputnivel" class="form-control">
            <option selected>Escolher...</option>
            <option>...</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-7">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4">Senha</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
        </div>
        <div class="form-group col-md-2">
          <label for="inputStatus">Status</label>
          <select id="inputStatus" class="form-control">
            <option selected>Escolher...</option>
            <option>...</option>
          </select>
        </div>
      </div>
      <div class="form-row justify-content-end">
        <div class="form-group col-md-3">
          <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </div>
        <div class="form-group col-md-3">
          <button type="button" class="btn btn-secondary btn-block">Cancelar</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
