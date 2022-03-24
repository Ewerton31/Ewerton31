<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    body{
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%) 
    }
  </style>
</head>

<body>
<h1>3DAW</h1>
<h2>Exercicio de Form</h2>
<?php
$nome=$_GET["num4"];
$v1=$_GET["num1"];
$v2=$_GET["num2"];
if($nome=='+'){
    $resultado= $v1+$v2;
}
else{
    if($nome=='-'){
        $resultado= $v1-$v2;
    }
    else{
        if($nome=='*')
        {
            $resultado= $v1*$v2;
        }
        else{
            if($nome=='/'){
              $resultado= $v1/$v2;
            }
        }
    }
}

?>
<form action="Apoio2.php" method="get">
    <input name="num1" type="text" value=<?php echo $v1 ?>>
    <input name="num4" type="text" value=<?php echo $nome?>>  
    <input name="num2" type="text" value=<?php echo $v2 ?>>
    =
    <input name="num3" type="text" value=<?php echo $resultado; ?>><br>
    <input type="submit" value="calcular"> 
</form>
</body>
</html>