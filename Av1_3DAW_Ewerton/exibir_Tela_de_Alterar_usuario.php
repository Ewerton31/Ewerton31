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
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $matricula = $_POST["matricula"]; //csv é um formato de texto para linhaXColuna
    $arquivo = fopen('Usuario.txt','r');
    While(!feof($arquivo)){
        $linha = fgets($arquivo);
        $colunaDados = explode(";",$linha);
        if($colunaDados[0] == $matricula){
            $nome = $colunaDados[1];
            $function = $colunaDados[2];
            break;
        }
    }
    fclose($arquivo);
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
<form action= "Alterar_usuario.php" method = POST>
    Nome:<input type= text name= "nome" value=<?php echo $nome ?>><br>
    Matricula:<input type= text name= "matricula"  value=<?php echo $matricula?> readonly><br>
    Função:<input type= text name= "function" value=<?php echo $function ?>><br>
    <input type="submit" value="alterar">
</form>
</body>
</html>