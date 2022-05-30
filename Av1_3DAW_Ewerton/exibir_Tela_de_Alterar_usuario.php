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
<h1>Alterar Usuario</h1>
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
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $matricula = $_POST["matricula"];
    $arquivo = fopen('Usuario.txt','r');
    $cont = 0;
    While(!feof($arquivo)){
        $linha = fgets($arquivo);
        $colunaDados = explode(";",$linha);
        if($colunaDados[0] == $matricula){
            $nome = $colunaDados[1];
            $function = $colunaDados[2];
            $cont = 1;
            break;
        }
    }
    if($cont==0){
        echo nl2br("Arquivo Não encontrado\n");
        $nome = ("Erro");
        $function = ("Erro");
    }
    fclose($arquivo);
}    
?>
<form action= "Alterar_usuario.php" method = POST>
    Matricula:<input type= text name= "matricula"  value=<?php echo $matricula?> readonly><br>
    Nome:<input type= text name= "nome" value=<?php echo $nome ?>><br>
    Função:<input type= text name= "function" value=<?php echo $function ?>><br>
    <table>
        <tr>
            <input type="submit" value="alterar">
</form>
            <form action= "Alterar_Usuario.html" method = POST>
                <input type="submit" value="Voltar">
            </form>
        </tr>
    </table>
</body>
</html>
