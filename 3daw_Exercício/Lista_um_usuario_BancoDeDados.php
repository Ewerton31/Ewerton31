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

<h1>Listar um</h1>
<form action= "Lista_um_usuario_BancoDeDados.php" method = "POST">
    Digite a ID que deseja Listar:<input type= text name= "id" value=''><br>
    <input type="submit" value="Listar Usuario">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once("conexao.php");
    $Id = $_POST["id"];
    $sql = "SELECT * FROM `usuario` WHERE id='$Id'";
    $resultado = mysqli_query($conn, $sql);
    $ler_resultado = mysqli_fetch_assoc($resultado);
    echo "Id:" . $ler_resultado['Id'] . "&ensp; Nome:" . $ler_resultado['Nome'] ."&emsp;Matricula:" . $ler_resultado['Matricula'] ."&emsp;Funcao:" . $ler_resultado['Funcao'] ."&emsp;Senha:" . $ler_resultado['Senha']."<br><hr>";
}    
?>
</body>
</html