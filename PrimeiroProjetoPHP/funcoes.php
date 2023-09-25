<?php 
    $data = date("d/m/Y");
    echo "Dia de hoje: $data";
    $dia = 22;
    $mes = 3;
    $ano = 2023;

    if(checkdate($mes, $dia, $ano)){
        echo "<br>A data existe";

    }
    $palavra = "Toledo Prudente";
    echo "<bri>A palavra tem" .strlen($palavra)."caracteres";

    $primeira_palavra = strtoupper(substr($palavra, 0, 6));
    $segunda_palavra = substr($palavra, -8);
    echo "<br>primeira: $primeira_palavra";
    echo "<br>Segunda: $segunda_palavra";

    $nomes = ["Júlia","André", "Gustavo", "Bruno", "Felipe", "Lucas", "Pedro", "João"];
    sort($nomes);
    var_dump($nomes);
    $valor = 15667.099898;
    $valor = number_format($valor, 2, ",", ".");
    echo "Valor formatado : $valor";

    function soma($valor1, $valor2) : float
    {
            $resultado = $valor1 + $valor2;
            return $resultado;
    }
    echo"chamando a funcao soma: ".(soma(1,2));

    ?>
    <a href="teste.php" target="_blank">Clique aqui</a>

