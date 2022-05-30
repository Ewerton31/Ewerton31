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

<h1>Listar um</h1>
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
<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $matricula = $_GET["matricula"];
    $arquivo = fopen('Usuario.txt','r+');
    $cont = 0;
    if ($arquivo){
    while(true){ 
        $linha = fgets($arquivo);
        if ($linha==null) break;
        if(preg_match("/$matricula/", $linha)){
            echo nl2br("$linha\n");
            $cont = 1;
        }
    }
    if($cont==0){
        echo nl2br("Arquivo Não encontrado\n");
    }
    fclose($arquivo);
    }
}    
?>
<form action= "Lista_um_usuario.php" method = GET>
    Digite a ID que deseja Listar:<input type= text name= "matricula" value=''><br>
    <input type="submit" value="Listar Produto">
</form>
</body>
</html
