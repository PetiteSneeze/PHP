<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>exercicio 6 resposta</title>
  </head>
  <body class="comtainer">
    <h1>
        <?php
        // Solicita a entrada dos valores A e B
        $a = $_POST["a"];
        $b = $_POST["b"];

        
        if ($a < $b) {
            echo "Valores: $a $b\n";
        } elseif ($a > $b) {
            echo "$b $a\n";
        } else {
            echo "Números iguais: $a\n";
        }
       
       ?>
</h1>

  </body>
</html>




