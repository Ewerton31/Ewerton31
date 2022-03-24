<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h1>3DAW</h1>
<?php
echo "<h2> Exercicio 07 </h2>";

$variavel = "Voce pensa que o flamengo e time?";
echo $variavel;
echo "<br>";
echo "Quantidade de caracteres: " . strlen ($variavel);
echo "<br>";
echo "Quantidade de palavras: " . str_word_count ($variavel);
echo "<br>";
echo "frase invertida: " . strrev ($variavel);


?>

</body>
</html>