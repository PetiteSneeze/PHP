<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alunos</title>
    <!-- Adicione o link para o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
    
    <?php
    $texto = fopen("arquivo2.txt", "w") or die("Erro");
    fwrite($texto, $_POST["nome"]. "\n");
    fwrite($texto, $_POST["cpf"]. "\n");
    fwrite($texto, $_POST["data_nascimento"]."\n");
    fwrite ($texto, $_POST["sexo"]."\n");
    fwrite ($texto, $_POST["estado_civil"]."\n");
    fwrite ($texto, $_POST["renda_mensal"]."\n");
    fwrite ($texto, $_POST["logradouro"]."\n");
    fwrite ($texto, $_POST["numero"]."\n");
    fwrite ($texto, $_POST["complemento"]."\n");
    fwrite ($texto, $_POST["estado"]."\n");
    fwrite ($texto, $_POST["cidade"]."\n");
    fclose($texto);
    readfile("arquivo2.txt");

    $nome_arquivo = basename($_FILES["arquivo"]["name"]);
    if (file_exists($nome_arquivo)){
        echo "O arquivo ja foi criado!";
        die();
    }
    $resultado = move_uploaded_file($_FILES["arquivo"]["tmp_name"], $nome_arquivo);
    if($resultado){
        echo "<a href ='$nome_arquivo'> Baixar Arquivo </a>";
    }
    else{
        echo"Erro ao salvar arquivo";
    }

    if($_FILES["arquivo"] ["size"] > 500000){
        echo "desculpe, o arquivo é muito grande";
        die();
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
        echo"Desculpe, somente JPG, PNG, & GIF arquivo sao permitidos!";
        die();
    }
    if(move_uploaded_file($_FILES["arquivo"] ["temp_name"], $target_file)){
        echo "O arquivo ".htmlspecialchars(basename($_FILES["arquivo"]["name"]))."foi carregado";
    }else{
        echo"desculpe, erro ao subir arquivo";
    }


    ?>
   
    <!-- Adicione o link para o Bootstrap JS (opcional, dependendo dos recursos que você precisa) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
