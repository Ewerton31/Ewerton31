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
<?php
    include_once("conexao.php");
?>
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
<form id="CadOnibus">
    <span id="ErroCadastro"></span><br>
    Marca:<input type= text name= "marca" value='' id="marca"><br>
    Modelo:<input type= text name= "modelo" value='' id="modelo"><br>
    Quatidade de Assentos:<input type= text name= "qtdAssentos" value='' id="qtdAssentos"><br>
    Tem Banheiro:<input type= text name= "TBanheiros" value='' id="TBanheiros"><br>
    Tem Ar Condicionado:<input type= text name= "TArCondionado" value='' id="TArCondionado"><br>
    Chassis:<input type= text name= "chassis" value='' id="chassis"><br>
    Placa:<input type= text name= "placa" value='' id="placa"><br>
    <input type="submit" value="Cadastrar">
</form>
<script src="js/Onibus_novo.js"></script>
</body>
</html>
