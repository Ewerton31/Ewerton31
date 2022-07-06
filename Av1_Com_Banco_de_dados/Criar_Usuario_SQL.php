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
        <form action= "Criar_Usuario_SQL.php" method = POST>
            <input type="submit" value="Criar">
        </form>
        <form action= "Alterar_Usuario_SQL.html" method = POST>
            <input type="submit" value="Alterar">
        </form>
        <form action= "Lista_todos_usuarios_SQL.php" method = POST>
            <input type="submit" value="Listar Todos">
        </form>
        <form action= "Lista_um_usuario_SQL.php" method = POST>
            <input type="submit" value="Listar um">
        </form>
        <form action= "Excluir_usuario_SQL.php" method = POST>
            <input type="submit" value="Excluir">
        </form>
    </tr>
</table>
<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    include_once("conexao.php");
    $matricula = $_GET["matricula"];
    $nome = $_GET["nome"];
    $funcao = $_GET["function"];
    $senha = $_GET["senha"];
    $sql = "INSERT INTO `Usuario`(`Nome`, `Matricula`, `Funcao`, `Senha`) VALUES ('$nome','$matricula','$funcao','$senha');";
    $resultado = mysqli_query($conn, $sql);
}    
?>
<form action= "Criar_Usuario_SQL.php" method = GET>
    Matrícula:<input type= text name= "matricula" value=''><br>
    Nome:<input type= text name= "nome" value=''><br>
    Função:<input type= text name= "function" value=''><br>
    Senha:<input type= text name= "senha" value=''><br>
    <input type="submit" value="Cadastrar">
</form>
</body>
</html>