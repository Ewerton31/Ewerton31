<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once("conexao.php");
    $Id = $_POST["id"];
    $sql = "SELECT * FROM `onibus` WHERE id='$Id'";
    $resultado = mysqli_query($conn, $sql);
    $Lista="";
    if($resultado->num_rows>0){
        $ler_resultado = mysqli_fetch_assoc($resultado);
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
        $Lista.="<table border='1'><thead><tr><th>Id</th><th>Marca</th><th>Modelo</th><th>qtdAssentos</th><th>temBanheiro</th><th>temArCondicionado</th><th>Chassis</th><th>Placa</th></tr></thead>";
        extract($ler_resultado);
        $Lista.= "<tr><td>$id</td><td>$marca</td><td>$modelo</td><td>$qtdAssentos</td><td>$res_Banheiros</td><td>$res_Ar</td><td>$chassis</td><td>$placa</td></tr></table>";        
    }
    else{
        $Lista.= "Id Nao encontrada";
    }
    echo $Lista;
}
