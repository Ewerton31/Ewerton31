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
<h1>Listar Todos os Usuario</h1>
<form action= "listar_todos_usuarios_bancoDeDados.php" method = "POST">
    <input type="submit" value="Listar Todos">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once("conexao.php");
    $sql = "SELECT * FROM `usuario`";
    $resultado = mysqli_query($conn, $sql);
    while($ler_resultado = mysqli_fetch_assoc($resultado)){
        echo "Id:" . $ler_resultado['Id'] . "  " . "&ensp; Nome:" . $ler_resultado['Nome'] ."&emsp;Matricula:" . $ler_resultado['Matricula'] ."&emsp;Funcao:" . $ler_resultado['Funcao'] ."&emsp;Senha:" . $ler_resultado['Senha'] ."<br><hr>";
    }
}    
?>
</body>
</html>