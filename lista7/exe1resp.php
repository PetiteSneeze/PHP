<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <?php
    class calculo{

    private $x;
    private $y;
  

  
    include("exe.php");
    $obj = new Pessoa($_POST['x'], $_POST['y']);


    echo "X: {$obj ->getNome()} <br/>";
    echo "Y: {$obj ->getIdade()} <br/>";
    
  function __Construct($x,$y){
    $this->setx($x);
    $this->sety($y);
  
}

function setx($nome){
    $this ->nome = $x;
}
function getx(){
    return $this->X;
}
function sety($y){
    $this->Y = $endereco;
}
function gety(){
    return $this ->endereco;
}
function setIdade($idade){
    if($idade>0)
        $this->idade= $idade;
    else
        $this->idade = 0;
}
function getIdade(){
    return $this->idade;
}

}
?>

  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>