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
<h1>Usuario Alterado com Sucesso</h1>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once("conexao.php");
    $ID = $_POST["id"];
    $matricula = $_POST["matricula"]; //csv é um formato de texto para linhaXColuna
    $nome = $_POST["nome"];
    $funcao = $_POST["function"];
    $senha = $_POST["senha"];
    $sql = "UPDATE `usuario` SET `Matricula`='$matricula',`Nome`='$nome',`Funcao`='$funcao',`Senha`='$senha' WHERE id='$ID'";
    $resultado = mysqli_query($conn, $sql);
    $sql2 = "SELECT * FROM `usuario` WHERE id='$ID'";
    $resultado2 = mysqli_query($conn, $sql2);
    $ler_resultado = mysqli_fetch_assoc($resultado2);
}    
?>
<form action= "Alterar_usuario_BancoDeDados.html" method = POST>
    Id:<input type= text name= "id" value=<?php echo $ler_resultado['Id'] ?> disabled=""><br>
    Matricula:<input type= text name= "matricula" value=<?php echo $ler_resultado['Matricula'] ?> disabled=""><br>
    Nome:<input type= text name= "nome" value=<?php echo $ler_resultado['Nome']?> disabled=""><br>
    Função:<input type= text name= "function" value=<?php echo $ler_resultado['Funcao'] ?> disabled=""><br>
    Senha:<input type= text name= "sennha" value=<?php echo $ler_resultado['Senha'] ?> disabled=""><br>
    <input type="submit" value="alterar outro">
</form>
</body>
</html>