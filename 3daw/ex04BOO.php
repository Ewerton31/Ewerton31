<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h1>3DAW</h1>
<?php
echo "<h2> Exercicio 03 </h2>";
echo "Alo alo mundo";

$variavel = "Esta é uma variavel tipo string";
var_dump($variavel);
$variavelInt = 232;
var_dump($variavelInt);
$variavelBoo = true;
var_dump($variavelBoo);
$variavelFloat = 3.3312;
var_dump($variavelFloat);


echo "<br>";
echo $variavel;

echo "<br>";
echo $variavelInt;

echo "<br>";
echo "Variavel tipo int: " . $variavelInt;

echo "<br>";
echo "Variavel tipo float: " . $variavelFloat;

echo "<br>";
echo "Variavel tipo Boolean: " . $variavelBoo;

if ($variavelBoo){
	echo "<br>";
	echo "Variavel tipo Boolean: True";	
}

?>

</body>
</html>