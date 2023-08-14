<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
    <h1>
    <?php
            $numero = array(); 


            for ($i = 0; $i < 7; $i++) {
                do {
                    echo "Digite o número " . ($i + 1) . ": ";
                    $num = intval(trim(fgets(STDIN)));
                    $repetido = false;

                    foreach ($numero as $n) {
                        if ($n === $num) {
                            echo "Número repetido. Digite novamente.\n";
                            $repetido = true;
                            break;
                        }
                    }
                } while ($repetido);

                $numero[] = $num; 
            }

            $menorValor = $numero[0];
            $posicaoMenorValor = 0;

            for ($i = 1; $i < 7; $i++) {
                if ($numero[$i] < $menorValor) {
                    $menorValor = $numero[$i];
                    $posicaoMenorValor = $i;
                }
            }

            echo "O menor valor é: $menorValor\n";
            echo "A posição do menor valor é: " . ($posicaoMenorValor + 1) . "\n";
            ?>


    </h1>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>