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
<h1>Listar um Onibus</h1>
<table>
    <thead>
        <tr>
            <form action= "Criar_Onibus.php" method = POST>
                <input type="submit" value="criar">
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
    </thead>
</table>
<span id="ErroCadastro"></span><br>
<form id="Listum">
    Digite a Id que deseja Exibir:<input type= text name= "id" value='' id="id">
    <input type="submit" value="Pesquisar">
</form>
<table>
     <thead>
        <tr>
            <th>Id</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>qtdAssentos</th>
            <th>temBanheiro</th>
            <th>temArCondicionado</th>
            <th>Chassis</th>
            <th>Placa</th>
        </tr>
    </thead> 
    <tbody>

    </tbody>
</table>
<script src="js/Onibus_listar_um.js"></script>
</body>
</html>
