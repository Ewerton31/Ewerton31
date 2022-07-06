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
<h1>Excluir Usuário</h1>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once("conexao.php");
    $id = $_POST["Id"];
    $sql = "DELETE FROM `usuario` WHERE Id='$id'";
    $resultado = mysqli_query($conn, $sql);
}   
    
?>
<form action= "Excluir_usuario_BancoDeDados.php" method = "POST">
    <br>Digite a Id que deseja Excluir:<input type= text name= "Id" value=''><br>
    <input type="submit" value="Excluir">
</form>
</body>
</html>