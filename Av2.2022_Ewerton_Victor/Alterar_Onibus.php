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
<h1>Onibus Alterado com Sucesso</h1>
<table>
    <tr>
        <form action= "Criar_Onibus.php" method = POST>
            <input type="submit" value="Criar">
        </form>
        <form action= "Alterar_Onibus.html" method = POST>
            <input type="submit" value="Alterar">
        </form>
        <form action= "index.php" method = POST>
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
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $qtdA = $_POST["qtdAssentos"];
    $tbam = $_POST["TBanheiros"];
    $tar = $_POST["TArCondionado"];
    $chassi = $_POST["chassis"];
    $placa = $_POST["placa"];
    
    $sql = "UPDATE `onibus` SET `Marca`='$marca',`Modelo`='$modelo',`qtdAssentos`='$qtdA',`temBanheiro`='$tbam',`temArCondicionado`='$tar',`Chassis`='$chassi',`Placa`='$placa'  WHERE id='$ID'";
    $resultado = mysqli_query($conn, $sql);
    $sql2 = "SELECT * FROM `onibus` WHERE id='$ID'";
    $resultado2 = mysqli_query($conn, $sql2);
    $ler_resultado = mysqli_fetch_assoc($resultado2);
}    
?>
<form action= "Alterar_Usuario_SQL.html" method = POST>
    Id:<input type= text name= "id"  value=<?php echo $ID;?> disabled=""><br>
    Marca:<input type= text name= "marca" value=<?php echo $ler_resultado['Marca'];?> disabled=""><br>
    Modelo:<input type= text name= "modelo" value=<?php echo $ler_resultado['Modelo'];?> disabled=""><br>
    Quatidade de Assentos:<input type= text name= "qtdAssentos" value=<?php echo $ler_resultado['qtdAssentos'];?> disabled=""><br>
    Tem Banheiro:<input type= text name= "TBanheiros" value=<?php echo $ler_resultado['temBanheiro'];?> disabled=""><br>
    Tem Ar Condicionado:<input type= text name= "TArCondionado" value=<?php echo $ler_resultado['temArCondicionado'];?> disabled=""><br>
    Chassis:<input type= text name= "chassis" value=<?php echo $ler_resultado['Chassis'];?> disabled=""><br>
    Placa:<input type= text name= "placa" value=<?php echo $ler_resultado['Placa'];?> disabled=""><br>
    <input type="submit" value="alterar outro">
</form>
</body>
</html>
