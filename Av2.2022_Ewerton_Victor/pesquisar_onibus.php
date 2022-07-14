<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once("conexao.php");
    $ID = $_POST["id"];
    $sql = "SELECT * FROM `onibus` WHERE id= '$ID'";
    $resultado = mysqli_query($conn, $sql);
    $Valore="";
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
        $Valore .= "Id:<input type= number name= 'id' value= $obj->id id= 'id' readonly><br> Marca:<input type= text name= 'marca' value=$obj->marca id= 'marca'><br> Modelo:<input type= text name= 'modelo' value=$obj->modelo id= 'modelo'><br> Quatidade de Assentos:<input type= number name= 'qtdAssentos' value=$obj->qtdAssentos id= 'qtdAssentos'><br> Tem Banheiro:<input type= text name= 'TBanheiros' value=$res_Banheiros id= 'TBanheiros'><br> Tem Ar Condicionado:<input type= text name= TArCondionado value=$res_Ar id= 'TArCondionado'><br> Chassis:<input type= text name= 'chassis' value=$obj->chassis id= 'chassis'><br> Placa:<input type= text name= 'placa' value=$obj->placa id= 'placa'><br><input type='submit'value='alterar'>";
    }
    else{
        $Valore .= "Id nao encontrado";
    }
    echo $Valore;
}    
