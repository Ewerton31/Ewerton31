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
<h1>Listar todos</h1>
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