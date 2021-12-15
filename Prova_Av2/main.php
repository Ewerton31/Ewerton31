<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Title</title>
</head>
<body>
<a href="IncluiOnubus.php">incluir Onibus</a><br>
<a href="AlterarOnibus.php">Alterar Onibus</a><br>
<a href="ListarOnibus.php">Listar Onibus</a><br>
<a href="excluironibus.php">Excluir Onibus</a><br>


<?php
   $id = $_POST["id"];
   $marca = $_POST["marca"];
   $modelo = $_POST["modelo"];
   $qtdeAscenstos = $_POST["qtdeAscenstos"];
   $temBanheiro = $_POST["temBanheiro"];
   $temArCondicionado = $_POST["temArCondicionado"];
   $chassis = $_POST["chassis"];
   $placa = $_POST["placa"];


   include_once 'conexao.php';


   $sql = "insert into ônibus values(null,
           '".$id."','".$marca."','".$modelo."','"$qtdeAscenstos"','"$temBanheiro"','"$temArCondicionado"','"$chassis"','"$placa")";
   if(mysql_query($sql,$con)){
       $msg = "Gravado com sucesso!";
   }else{
       $msg = "Erro ao gravar!";
   }
   mysql_close($con);
?>
</body>
</html>