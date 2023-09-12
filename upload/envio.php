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
    fwrite($texto, $_POST["dataNascimento"]."\n");
    fwrite ($sexo, $_POST["sexo"]."\n");
    fwrite ($estado_Civil, $_POST["estado_civil"]."\n");
    fwrite ($renda_Mensal, $_POST["Renda_mensal"]."\n");
    fwrite ($logradouro, $_POST["logradouro"]."\n");
    fwrite ($numero, $_POST["numero"]."\n");
    fwrite ($complemento, $_POST["complemento"]."\n");
    fwrite ($estado, $_POST["estado"]."\n");
    fwrite ($cidade, $_POST["cidade"]."\n");
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

    ?>
   
    <!-- Adicione o link para o Bootstrap JS (opcional, dependendo dos recursos que você precisa) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
