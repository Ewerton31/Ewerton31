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
    /*ul{
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%) 
    }*/
    </style>
</head>
<body>
<?php
    include_once("conexao.php");
?>
<div>
<h1>Listar todos os Onibus 2</h1>
<table>
    <thead>
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
        </tr>
    </thead> 
</table>
<div id="Lista">

</div>

<div id="paginacao">
    <form id= "filtro">
        <label>Ordenar</label>
        <select name="Ordem" id="ordenar">
            <option name ="Ordem"value="c" id="op">Crescente</option>
            <option name="Ordem" value="d" id="op">Decrescente</option>
        </select>
        <input type="submit" value="Filtrar">
    </form>
</div>
<script src="js/Onibus2.js"></script>
</body>
</html>