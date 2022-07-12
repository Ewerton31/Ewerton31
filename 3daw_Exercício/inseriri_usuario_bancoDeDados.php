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
    $matricula = $_POST["matricula"]; //csv é um formato de texto para linhaXColuna
    $nome = $_POST["nome"];
    $funcao = $_POST["function"];
    $senha = $_POST["senha"];
    $user='root';
    $pass='';
    $dbh = new PDO('mysql:host=localhost;dbname=faeterj3dawexer', $user, $pass);
    $sql = "INSERT INTO `Usuario`(`Nome`, `Matricula`, `Funcao`, `Senha`) VALUES ('$nome','$matricula','$funcao','$senha');";
    print_r($sql);
    try{
        $result = $dbh->query($sql);
        print_r($result);
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    } 
}    
?>
<form action= "inseriri_usuario_bancoDeDados.php" method = "POST">
    Matrícula:<input type= text name= "matricula" value=''><br>
    Nome:<input type= text name= "nome" value=''><br>
    Função:<input type= text name= "function" value=''><br>
    Senha:<input type= text name= "senha" value=''><br>
    <input type="submit" value="enviar">
</form>

</body>
</html>