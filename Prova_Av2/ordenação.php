﻿<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Title</title>
</head>
<body>
<?php
$ehPost = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $nome = $_POST["nome"];
   $matricula = $_POST["matricula"];
   $Função = $_POST["Função"];
   $arquivoUsuario = fopen("Usuário.txt", "w");
   $txt = "nome;matricula;Função\n";
   fwrite($arquivoUsuario,$txt);
   $txt = $nome . ";" . $matricula . ";" . $Função . "\n";
   fwrite($arquivoUsuario,$txt);
   $txt2 = "$nome;$matricula;$Função\n";
   fwrite($arquivoUsuario,$txt2);
   fclose($arquivoUsuario);
} else {
   $ehPost = false;
}
?>
<a href="cadUsuario.php">Inserir Usuario</a><br>
<a href="altUsuario.php">Alterar Usuario</a><br>
<a href="ListaUsuarios.php">Listar todos Usuario</a><br>
<a href="ListaUmUsuario.php">Excluir um Usuario</a><br><br>


<h1>1)Inserir Usuários</h1>


<h3><?php if ($ehPost) {echo "Usuário $nome inserido com sucesso";} ?></h3>


<form action="ex4_cadUsuario.php" method="POST">
   nome:   <input type="text" name="nome"><br>
   matricula:   <input type="text" name="matricula"><br>
   Função:   <input type="text" name="Função"><br>
   <input type="submit" value="enviar">
</form>


<h1>2)Alterar Usuários</h1>
<?php
$mat = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $nome = $_POST["Nome"];
   $mat = $_POST["matricula"];
   $Fun = $_POST["Função"];
} else {
   $mat = $_GET["matricula"];
}
?>
<form action="altUsuario.php" method="POST">
   matricula: <input type="hidden" name="matricula" value="654321"> 123456<br>
   nome:   <input type="text" name="Nome" value="Eduardo Pereira"><br>
   Função:   <input type="text" name="Função" value="Auxiliar de escritório"><br>
   <input type="submit" value="Alterar">
</form>


<h1>3) Listar todos os Usuários </h1>
<form action="ListaUsuarios.php" method="post">
   <input type="submit" name="op" value="Listar Usuáriois" >
   <br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $servidor = "localhost";
   $usuario = "root";
   $senha = "";
   $nomeBanco = "faeterj3dawnoite2";


   $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
   if ($conn->connect_error) {
       die("Conexão com erro " . $conn->connect_error);
   }


   $sql = "SELECT * FROM `Usuário`";
   $result = $conn->query($sql);
   echo "<table border='1'>";
   echo "<tr>";
   echo "<th>MATRICULA</th><th>nome Fantasia</th><th>Razao social</th><th>cnpj</th><th>email</th><th>telefone</th>";
   while ($linha = $result->fetch_assoc()) {
       echo "<tr>";
       echo "<td> " . $linha["MatriculaUsuário"] . "</td>";
       echo "<br>";
       echo "<td> " . $linha["nomeUsuário"] . "</td>";
       echo "<br>";
       echo "<td> " . $linha["FunçãoUsuário"] . "</td>";
       echo "<br>";
       echo "<tr>";
   }
   echo "</table>";
}
?>


<h1>4)Listar um Usuários</h1>
<?php
$nomeArquivo = "UsuariosNovos_2021.txt";
$arquivoUsuario = fopen($nomeArquivo, "r") or die("Erro ao ler o arquivo");
$cabecalho = fgets($arquivoUsuario);
$x = 0;
while (!feof($arquivoUsuario)) {
   $linha[] = fgets($arquivoUsuario);
}
fclose($arquivoUsuario);
?>
<table>
   <tr>
       <th>Nome Usuário</th>
       <th>matricula</th>
       <th>função</th>
   </tr>
<?php
   for ($x=0;$x <= count($linha); $x++)
echo "<tr>";
   echo "<td>Robeto Paiva</td>";
   echo  "<td>546777</td> ";
  echo  "<td>Gerente</td>";
?>
</table>
</body>
</html>