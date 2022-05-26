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
<h1>Criar Usuário</h1>
<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $matricula = $_GET["matricula"];
    $nome = $_GET["nome"];
    $function = $_GET["function"];
    if(!file_exists("Usuario.txt")){
        $header ="Matrícula;Nome;Função\n";
        $arquivoUsuaio = fopen("Usuario.txt","w");
        fwrite ($arquivoUsuaio , $header);
        fclose($arquivoUsuaio);
    }
    $arquivoUsuaio = fopen("Usuario.txt","a") or die ("Arquivo com problema");
    $linha = $matricula . ";" . $nome . ";" . $function . "\n";
    fwrite($arquivoUsuaio, $linha);
    fclose($arquivoUsuaio);
}    
?>
<table>
    <tr>
        <form action= "Criar_Usuario.php" method = POST>
            <input type="submit" value="Criar">
        </form>
        <form action= "Alterar_Usuario.html" method = POST>
            <input type="submit" value="Alterar">
        </form>
        <form action= "Lista_todos_usuarios.php" method = POST>
            <input type="submit" value="Listar Todos">
        </form>
        <form action= "Lista_um_usuario.php" method = POST>
            <input type="submit" value="Listar um">
        </form>
        <form action= "Excluir_usuario.php" method = POST>
            <input type="submit" value="Excluir">
        </form>
    </tr>
</table>
<form action= "Criar_Usuario.php" method = GET>
    Matrícula:<input type= text name= "matricula" value=''><br>
    Nome:<input type= text name= "nome" value=''><br>
    Função:<input type= text name= "function" value=''><br>
    <input type="submit" value="Cadastrar">
</form>

</body>
</html>