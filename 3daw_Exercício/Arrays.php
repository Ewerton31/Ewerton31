<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h1>3DAW</h1>
<?php
echo "<h2> Exercicio Array </h2>";
    $carros = array("Fusca", "BMW", "Opala", "Palio");
    $precos = array("28000","35000","21340","30080");
    for ($i=0;$i<4;$i++){
        echo "<br>";
        echo "Meu Carro é um ".$carros[$i]." E custa ".$precos[$i];
        
    }
    echo "<br>";
    echo count($carros);
    echo "<br>";
    foreach($carros as $carros){
        echo "Meu carro é um $carros <br>";
    }
?>

</body>
</html>