<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Funcionários</title>
  <style>
    body {
      background-color: #f5f5f5;
    }
    .navbar {
      background-color: #343a40;
    }
    .navbar-dark .navbar-nav .nav-link {
      color: #343a40;
      text-align: center;
    }
    .container {
      background-color: #fff;
      padding: 20px;
      margin-top: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .form-control {
      margin-bottom: 10px;
    }
    .btn-gravar {
      background-color: #007bff;
      color: #fff;
    }
    .btn-cancelar {
      background-color: #6c757d;
      color: #fff;
    }
  </style>
</head>
<body>
    <h1>Funcionários</h1>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 30px;">Basico</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 30px;">Documento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 30px;">Histórico</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 30px;">Dependentes</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <form>
      <div class="form-group">
        <label for="matricula">Matrícula</label>
        <input type="text" class="form-control" id="matricula" placeholder="Matrícula">
      </div>
      <div class="form-group">
        <label for="nome">Nome do Funcionário</label>
        <input type="text" class="form-control" id="nome" placeholder="Nome completo!">
      </div>
      <div class="form-group">
        <label for="dataNascimento">Data de Nascimento</label>
        <input type="datetime-local" class="form-control" id="dataNascimento">
      </div>
      <div class="form-group">
        <label for="foto">Foto do Funcionário</label>
        <input type="file" class="form-control-file" id="foto">
      </div>
      <div class="row">
        <div class="col-md-2">
          <button type="button" class="btn btn-gravar btn-block">Gravar</button>
        </div>
        <div class="col-md-2">
          <button type="button" class="btn btn-cancelar btn-block" style="margin-left: 755px;">Cancelar</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
