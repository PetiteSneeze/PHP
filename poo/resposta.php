<?php
    include("pessoa.php");
    $obj = new Pessoa($_POST['nome'], $_POST['endereco'], $_POST['idade']);

    #$obj -> setNome($_POST["nome"]);
    #$obj -> setIdade($_POST["idade"]);
    #$obj -> setEndereco($_POST["endereco"]);

    echo "Nome: {$obj ->getNome()} <br/>";
    echo "Idade: {$obj ->getIdade()} <br/>";
    echo "Endereço: {$obj ->getEndereco()} <br/>";

?>