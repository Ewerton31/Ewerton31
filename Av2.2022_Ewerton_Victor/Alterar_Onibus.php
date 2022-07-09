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
    $Valore="";
    extract($ler_resultado);
    $Valore .= "Id:<input type= text name= 'id' value= $Id id= 'id' readonly><br> Marca:<input type= text name= 'marca' value=$Marca id= 'marca'><br> Modelo:<input type= text name= 'modelo' value=$Modelo id= 'modelo'><br> Quatidade de Assentos:<input type= text name= 'qtdAssentos' value=$qtdAssentos id= 'qtdAssentos'><br> Tem Banheiro:<input type= text name= 'TBanheiros' value=$temBanheiro id= 'TBanheiros'><br> Tem Ar Condicionado:<input type= text name= TArCondionado value=$temArCondicionado id= 'TArCondionado'><br> Chassis:<input type= text name= 'chassis' value=$Chassis id= 'chassis'><br> Placa:<input type= text name= 'placa' value=$Placa id= 'placa'><br><input type='submit'value='alterar'>";
    echo $Valore;
}    
