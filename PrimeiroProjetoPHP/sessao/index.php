<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>


  <body class="container">
    <?php if((isset($_GET['acesso'])) && ($_GET['acesso'] =='negado')){

     ?>
    <div class="alert alert-error">
      voce nao possui permissao para acessar a pagina!
      informe o nome de usuario e senhas corretos!
    </div><?php } ?>
    
  <form method="POST" action="acessar.php">
    <div class="row">
        <div class="col-6">
            <label class="form-label">
                    Informe o nome de usuario:</label>
            <input type="text" name="usuario" class="form-control"/>
        </div>
        <div class="col-6">
            <label class="form-label">Informe a senha:</label>
            <input type="password" name="senha" class="form-control"/>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Acessar
                </button>
            </div>
        </div>
    </div>


  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>