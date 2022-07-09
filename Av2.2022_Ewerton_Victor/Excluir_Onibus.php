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
<h1>Excluir Onibus</h1>
<table>
    <tr>
        <form action= "Criar_Onibus.php" method = POST>
            <input type="submit" value="Criar">
        </form>
        <form action= "Alterar_OnibusVer1.php" method = POST>
            <input type="submit" value="Alterar">
        </form>
        <form action= "index.php" method = POST>
            <input type="submit" value="Listar Todos">
        </form>
        <form action= "Lista_um_Onibus.php" method = POST>
            <input type="submit" value="Listar um">
        </form>
        <form action= "Excluir_Onibus.php" method = POST>
            <input type="submit" value="Excluir">
        </form>
    </tr>
</table>
<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    include_once("conexao.php");
    $id = $_GET["Id"];
    $sql = "DELETE FROM `onibus` WHERE Id='$id'";
    $resultado = mysqli_query($conn, $sql);
}    
?>
<form action= "Excluir_Onibus.php" method = GET>
    <br>Digite a Id que deseja Excluir:<input type= text name= "Id" value=''><br>
    <input type="submit" value="Excluir">
</form>
</body>
</html
