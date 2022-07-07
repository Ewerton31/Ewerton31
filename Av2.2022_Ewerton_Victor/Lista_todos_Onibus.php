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
<h1>Listar todos os Onibus</h1>
<table>
    <tr>
        <form action= "Criar_Onibus.php" method = POST>
            <input type="submit" value="Criar">
        </form>
        <form action= "Alterar_Onibus.html" method = POST>
            <input type="submit" value="Alterar">
        </form>
        <form action= "Lista_todos_Onibus.php" method = POST>
            <input type="submit" value="Listar Todos">
        </form>
        <form action= "Lista_um_Onibus.php" method = POST>
            <input type="submit" value="Listar um">
        </form>
        <form action= "Excluir_Onibus.php" method = POST>
            <input type="submit" value="Excluir">
        </form>
    </tr>
</table>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once("conexao.php");
    $sql = "SELECT * FROM `onibus`";
    $resultado = mysqli_query($conn, $sql);
    while($ler_resultado = mysqli_fetch_assoc($resultado)){
        echo "Id:" . $ler_resultado['Id'] . "&ensp; Marca:" . $ler_resultado['Marca'] ."&emsp;Modelo:" . $ler_resultado['Modelo'] ."&emsp;qtdAssentos:" . $ler_resultado['qtdAssentos'] ."&emsp;temBanheiro:" . $ler_resultado['temBanheiro']."&emsp;temArCondicionado:" . $ler_resultado['temArCondicionado']."&emsp;Chassis:" . $ler_resultado['Chassis']."&emsp;Placa:" . $ler_resultado['Placa'] ."<br><hr>";
    }
}    
?>
</body>
</html>