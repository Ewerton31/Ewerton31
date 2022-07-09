<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once("conexao.php");
    $Id = $_POST["id"];
    $sql = "SELECT * FROM `onibus` WHERE id='$Id'";
    $resultado = mysqli_query($conn, $sql);
    $ler_resultado = mysqli_fetch_assoc($resultado);
    $Lista="";
    extract($ler_resultado);
    $Lista .= "<tr><td>$Id</td><td>$Marca</td><td>$Modelo</td><td>$qtdAssentos</td><td>$temBanheiro</td><td>$temArCondicionado</td><td>$Chassis</td><td>$Placa</td></tr>";
    echo $Lista;
}    
