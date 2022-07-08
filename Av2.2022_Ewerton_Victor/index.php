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
<h1>Listar todos os Onibus</h1>
<?php
    include_once("conexao.php");
?>
<table>
    <thead>
        <tr>
            <form action= "Criar_Onibus.php" method = POST>
                <input type="submit" value="Cadastrar">
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
    </thead> 
</table>
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
<script src="js/Onibus.js"></script>
</body>
</html>