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
<h1>Alterar Onibus</h1>
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
    </tr>
</table>
<span id="ErroCadastro"></span><br>
<form id="AltOnibus">
    Digite a Id que deseja alterar:<input type= text name= "id" value='' id="id">
    <input type="submit" value="Pesquisar">
</form>
<form id="TelaAlt"></form><br>
<script src="js/Onibus_alterar.js"></script>
</body>
</html>