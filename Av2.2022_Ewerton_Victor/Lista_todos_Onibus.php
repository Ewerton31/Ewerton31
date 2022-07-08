<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    include_once("conexao.php");
    $sql = "SELECT * FROM `onibus`";
    $resultado = mysqli_query($conn, $sql);
    $Lista="";
    while($ler_resultado = mysqli_fetch_assoc($resultado)){
        extract($ler_resultado);
        $Lista .= "<tr><td>$Id</td><td>$Marca</td><td>$Modelo</td><td>$qtdAssentos</td><td>$temBanheiro</td><td>$temArCondicionado</td><td>$Chassis</td><td>$Placa</td></tr>";
    }
    echo $Lista;
}    
