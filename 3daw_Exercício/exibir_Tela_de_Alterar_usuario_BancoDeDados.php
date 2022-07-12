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
    include_once("conexao.php");
    $ID = $_POST["id"];
    $sql = "SELECT * FROM `usuario` WHERE Id= '$ID'";
    $resultado = mysqli_query($conn, $sql);
    $ler_resultado = mysqli_fetch_assoc($resultado);
}    
?>
<form action= "Alterar_usuario_BancoDeDados.php" method = POST>
    Id:<input type= text name= "id"  value=<?php echo $ID;?> readonly ><br>
    Matricula:<input type= text name= "matricula"  value=<?php echo $ler_resultado['Matricula'];?>><br>
    Nome:<input type= text name= "nome" value=<?php echo $ler_resultado['Nome']; ?>><br>
    Função:<input type= text name= "function" value=<?php echo $ler_resultado['Funcao']; ?>><br>
    Senha:<input type= text name= "senha" value=<?php echo $ler_resultado['Senha'];?>><br>
    <input type="submit" value="alterar">
</body>
</html>