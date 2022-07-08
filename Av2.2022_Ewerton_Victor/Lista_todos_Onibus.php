<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    include_once("conexao.php");
    $sql = "SELECT * FROM `onibus`";
    $resultado = mysqli_query($conn, $sql);
    $Lista="";
    while($ler_resultado = mysqli_fetch_assoc($resultado)){
        //echo "<td>". $ler_resultado['Id'] . $ler_resultado['Marca'] . $ler_resultado['Modelo'] . $ler_resultado['qtdAssentos'] . $ler_resultado['temBanheiro'] . $ler_resultado['temArCondicionado'] . $ler_resultado['Chassis'] . $ler_resultado['Placa'] ."</td><br>";
        extract($ler_resultado);
        $Lista .= "<table><tr><td>$Id</td><td>$Marca</td><td>$Modelo</td><td>$qtdAssentos</td><td>$temBanheiro</td><td>$temArCondicionado</td><td>$Chassis</td><td>$Placa</td></tr> </table>";
        
        //var_dump($ler_resultado);
        //echo  "<td>".$Id."</td>";
        /*echo  "<td>".$ler_resultado['Marca']."</td>";
        echo  "<td>".$ler_resultado['Modelo']."</td>";
        echo  "<td>".$ler_resultado['qtdAssentos']."</td>";
        echo  "<td>".$ler_resultado['Id']."</td>";
        echo  "<td>".$ler_resultado['Id']."</td>";
        echo  "<td>".$ler_resultado['Id']."</td>";
        echo  "<td>".$ler_resultado['Id']."</td>";
        echo  "<td>".$ler_resultado['Id']."</td>";
        echo  "<td>".$ler_resultado['Id']."</td>";*/
    }
    echo $Lista;
}    
