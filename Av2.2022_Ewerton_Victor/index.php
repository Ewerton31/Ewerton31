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
    /*PROFESSOR NA PROVA TAV FALANDO QUE O BANCO ERA faeterj3dawnoite 
    SÓ AVISANDO PRO SR NÃO CONFUNDIR MESMO QUE NÓS SOMOS DA TURMA DA MANHÃ 
    O BANCO QUE FOI DADO PRA GENTE FAZER AINDA É DENOMINADO PELA NOITE*/
?>
<h1>Index Onibus</h1>
<table>
    <thead>
        <tr>
            <form id="Cadastrar">
                <input type="submit" value="Cadastrar">
            </form>
            <form id="TelaAltOnibus">
                <input type="submit" value="Alterar">
            </form>
            <form id="listOnibus">
                <input type="submit" value="Listar Todos">
            </form>
            <form id="listOnibus_1">
                <input type="submit" value="Listar um">
            </form>
        </tr>
    </thead> 
</table>
<span id="ErroCadastro"></span><br>
<table border="1">
    <thead id="headList">

    </thead> 
    <tbody>

    </tbody>
</table>
<form id="Listum">

</form>
<form id="cadOnibus">

</form>
<form id="AltOnibus">

</form>
<form id="TelaAlt"></form><br>
<script src="js/Onibus.js"></script>
</body>
</html>
