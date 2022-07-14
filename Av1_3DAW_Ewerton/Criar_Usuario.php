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
    $nome = $_GET["nome"];
    $cont = 0;
    $function = $_GET["function"];
    if(!file_exists("Usuario.txt")){
        $header ="Matrícula;Nome;Função\n";
        $arquivoUsuaio = fopen("Usuario.txt","w");
        fwrite ($arquivoUsuaio , $header);
        fclose($arquivoUsuaio);
    }
    $arquivo = fopen('Usuario.txt','r+');
    While(!feof($arquivo)){
        $linha = fgets($arquivo);
        $colunaDados = explode(";",$linha);
        if($colunaDados[0] == $matricula){
            echo nl2br("Matrícula já existe então digite novamente por favor\n");
            $cont = 1;
            break;
        }
    }
    fclose($arquivo);
    if($cont==0){
        $arquivoUsuaio = fopen("Usuario.txt","a") or die ("Arquivo com problema");
        $linha = $matricula . ";" . $nome . ";" . $function . "\n";
        fwrite($arquivoUsuaio, $linha);
        fclose($arquivoUsuaio);
    }
}    
?>
<form action= "Criar_Usuario.php" method = GET>
    Matrícula:<input type= number name= "matricula" value=''><br>
    Nome:<input type= text name= "nome" value=''><br>
    Função:<input type= text name= "function" value=''><br>
    <input type="submit" value="Cadastrar">
</form>
</body>
</html>
