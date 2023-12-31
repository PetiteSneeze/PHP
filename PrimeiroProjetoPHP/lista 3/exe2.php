<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Exercício 3</h1>
    <form action="exe2resp.php" method="POST">
        <div class="row">
            <?php for($i=1;$i<=5;$i++) { ?>
                <div class="col">
                    <label class="form-label" for="a<?=$i?>">
                    Informe o numero <?=$i?>:
                    </label>
                    <input type="number" id="a<?=$i?>" name="a<?=$i?>" class="form-control"/>
                </div>
            <?php
             } ?>
        </div>
        
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success" style="margin-top: 30px;">Aplicar</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>