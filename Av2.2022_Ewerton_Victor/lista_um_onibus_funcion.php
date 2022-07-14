<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once("conexao.php");
    $Id = $_POST["id"];
    $sql = "SELECT * FROM `onibus` WHERE id='$Id'";
    $resultado = mysqli_query($conn, $sql);
    $Lista="";
    if($resultado->num_rows>0){
        $ler_resultado = mysqli_fetch_assoc($resultado);
        $jsom = json_encode($ler_resultado);
        $obj = json_decode($jsom);
        if($obj->temBanheiro==0){
            $res_Banheiros="NAO";
        }
        else{
            $res_Banheiros="SIM";
        }
        if($obj->temArCondicionado==0){
            $res_Ar="NAO";
        }
        else{
            $res_Ar="SIM";
        }
        $Lista.="<table border='1'><thead><tr><th>Id</th><th>Marca</th><th>Modelo</th><th>qtdAssentos</th><th>temBanheiro</th><th>temArCondicionado</th><th>Chassis</th><th>Placa</th></tr></thead>";

        $Lista.= "<tr><td>$obj->id</td><td>$obj->marca</td><td>$obj->modelo</td><td>$obj->qtdAssentos</td><td>$res_Banheiros</td><td>$res_Ar</td><td>$obj->chassis</td><td>$obj->placa</td></tr></table>";        
    }
    else{
        $Lista.= "Id Nao encontrada";
    }
    echo $Lista;
}
