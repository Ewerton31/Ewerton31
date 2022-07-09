<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    include_once("conexao.php");
    $sql = "SELECT * FROM `onibus`";
    $resultado = mysqli_query($conn, $sql);
    $Lista="";
    while($ler_resultado = mysqli_fetch_assoc($resultado)){
        extract($ler_resultado);
        if($ler_resultado['temBanheiro']==0){
            $res_Banheiros="NAO";
        }
        else{
            $res_Banheiros="SIM";
        }
        if($ler_resultado['temArCondicionado']==0){
            $res_Ar="NAO";
        }
        else{
            $res_Ar="SIM";
        }
        $Lista .= "<tr><td>$id</td><td>$marca</td><td>$modelo</td><td>$qtdAssentos</td><td>$res_Banheiros</td><td>$res_Ar</td><td>$chassis</td><td>$placa</td></tr>";
    }
    echo $Lista;
}  
