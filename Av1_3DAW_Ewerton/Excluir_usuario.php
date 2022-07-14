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
<h1>Excluir Usuário</h1>
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
    $cont = 0;
    $arquivo = fopen('Usuario.txt','r+');
    $arquivo2 = fopen('Usuario_Rarcunho.txt', 'w');
    if ($arquivo){
    while(true){ 
        $linha = fgets($arquivo);
        if ($linha==null) break;
        if(preg_match("/$matricula/", $linha)){
            echo nl2br("Arquivo Excluido com sucesso\n");
            $cont = 1;
        } else {
        $string = $linha;
        fwrite($arquivo2, $string);
        }
        }
    fclose($arquivo);
    fclose($arquivo2);
    }
    $arquivo2 = fopen('Usuario_Rarcunho.txt','r+');
    $arquivo = fopen('Usuario.txt', 'w');
    if ($arquivo){
        while(true){ 
            $linha = fgets($arquivo2);
            if ($linha==null) break;
            $string = $linha;
            fwrite($arquivo, $string);
        }
        fclose($arquivo);
        fclose($arquivo2);
    }
    if($cont==0){
        echo nl2br("Arquivo Não encontrado\n");
    }
}    
?>
<form action= "Excluir_usuario.php" method = GET>
    <br>Digite a Matricula que deseja Excluir:<input type= number name= "matricula" value=''><br>
    <input type="submit" value="Excluir">
</form>
</body>
</html>
