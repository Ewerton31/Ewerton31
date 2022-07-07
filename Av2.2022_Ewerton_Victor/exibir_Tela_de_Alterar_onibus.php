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
<h1>Alterar Onibus</h1>
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
    $ID = $_POST["id"];
    $sql = "SELECT * FROM `onibus` WHERE Id= '$ID'";
    $resultado = mysqli_query($conn, $sql);
    $ler_resultado = mysqli_fetch_assoc($resultado);
}    
?>
<form action= "Alterar_Onibus.php" method = POST>
    Id:<input type= text name= "id"  value=<?php echo $ID;?> readonly ><br>
    Marca:<input type= text name= "marca" value=<?php echo $ler_resultado['Marca'];?>><br>
    Modelo:<input type= text name= "modelo" value=<?php echo $ler_resultado['Modelo'];?>><br>
    Quatidade de Assentos:<input type= text name= "qtdAssentos" value=<?php echo $ler_resultado['qtdAssentos'];?>><br>
    Tem Banheiro:<input type= text name= "TBanheiros" value=<?php echo $ler_resultado['temBanheiro'];?>><br>
    Tem Ar Condicionado:<input type= text name= "TArCondionado" value=<?php echo $ler_resultado['temArCondicionado'];?>><br>
    Chassis:<input type= text name= "chassis" value=<?php echo $ler_resultado['Chassis'];?>><br>
    Placa:<input type= text name= "placa" value=<?php echo $ler_resultado['Placa'];?>><br>
    <table>
        <tr>
            <input type="submit" value="alterar">
</form>
            <form action= "Alterar_Onibus.html" method = POST>
                <input type="submit" value="Voltar">
            </form>
        </tr>
    </table>
</body>
</html>