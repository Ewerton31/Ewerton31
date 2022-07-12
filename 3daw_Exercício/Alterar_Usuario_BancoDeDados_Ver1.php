<?php
    session_start();
?>
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
<h1>Incluir Usuario</h1>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once("conexao.php");
    $matricula = $_POST["matricula"]; //csv é um formato de texto para linhaXColuna
    $nome = $_POST["nome"];
    $funcao = $_POST["function"];
    $senha = $_POST["senha"];
    $sql = "SELECT * FROM `usuario` WHERE id='11'";
    $resultado = mysqli_query($conn, $sql);
}    
?>
<form action= "Alterar_Usuario_BancoDeDados_Ver1.php" method = "POST">
    Matrícula:<input type= text name= "matricula" value=''><br>
    Nome:<input type= text name= "nome" value=''><br>
    Função:<input type= text name= "function" value=''><br>
    Senha:<input type= text name= "senha" value=''><br>
    <input type="submit" value="enviar">
</form>

</body>
</html>