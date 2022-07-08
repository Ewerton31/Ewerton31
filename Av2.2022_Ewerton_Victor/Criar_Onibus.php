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
<h1>Criar Onibus</h1>
<table>
    <tr>
        <form action= "Criar_Onibus.php" method = POST>
            <input type="submit" value="Criar">
        </form>
        <form action= "Alterar_Onibus.html" method = POST>
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
    $marca = $_GET["marca"];
    $modelo = $_GET["modelo"];
    $qtdA = $_GET["qtdAssentos"];
    $tbam = $_GET["TBanheiros"];
    $tar = $_GET["TArCondionado"];
    $chassi = $_GET["chassis"];
    $placa = $_GET["placa"];
    $sql = "INSERT INTO `onibus`(`Marca`, `Modelo`, `qtdAssentos`, `temBanheiro`, `temArCondicionado`, `Chassis`, `Placa`) VALUES ('$marca','$modelo','$qtdA','$tbam','$tar','$chassi','$placa');";
    $resultado = mysqli_query($conn, $sql);
}    
?>
<form action= "Criar_Onibus.php" method = GET>
    Marca:<input type= text name= "marca" value=''><br>
    Modelo:<input type= text name= "modelo" value=''><br>
    Quatidade de Assentos:<input type= text name= "qtdAssentos" value=''><br>
    Tem Banheiro:<input type= text name= "TBanheiros" value=''><br>
    Tem Ar Condicionado:<input type= text name= "TArCondionado" value=''><br>
    Chassis:<input type= text name= "chassis" value=''><br>
    Placa:<input type= text name= "placa" value=''><br>
    <input type="submit" value="Cadastrar">
</form>
</body>
</html>
