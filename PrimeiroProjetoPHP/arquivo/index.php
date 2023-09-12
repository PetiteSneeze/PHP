<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de arquivos</title>
</head>
<body class="container">
    <?php
    
        $palavra = "andre\n";
        $texto_alterar = fopen("arquivo.txt", "w") or die("Arquivo inesistente");
        fwrite($texto_alterar, $palavra);
        fclose($texto_alterar);




        //echo readfile("arquivo.txt");
        $texto = fopen("arquivo.txt", "r") or die("Arquivo inesistente");
        //echo fread($texto, filesize("arquivo.txt"));
        while(!feof($texto)){
            echo "<p>".fgets($texto)."<p>";
        }
        fclose($texto);
    ?>

</body>
</html>