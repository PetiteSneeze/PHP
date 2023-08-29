<?php
    for($i=1;$i<=5;$i++){
        $vetor[$i] = $_POST["a$i"]; 
    }

            $negativo = 0;
            $positivos = 0;
            $impar = 0;
            $par = 0;

    foreach($vetor as $valor){
       if($valor <0){
              $negativo++;  
       }
       else{
            $positivos++;
       }
       if($valor %2==0){
            $par++;
       }
       else{
            $impar++;
       }
    }

    echo "<br/>Existem na lista $negativo numeros negativos!";
    echo "<br/>Existem na lista $positivos numeros positivos!";
    echo "<br/>Existem na lista $par numeros pares!";
    echo "<br/>Existem na lista $impar numeros impares!";