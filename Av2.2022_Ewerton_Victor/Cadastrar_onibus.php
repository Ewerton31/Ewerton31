<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once("conexao.php");
    $id = $_POST["id"];
    $sql1 = "SELECT * FROM `onibus` WHERE id= '$id'";
    $resultado1 = mysqli_query($conn, $sql1);
    $Valore = "";
    if($resultado1->num_rows>0){
        $Valore.= "Esse Id Ja foi cadastrado por favor digite um ID diferente";
    }
    else{
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $qtdA = $_POST["qtdAssentos"];
        $tbam = $_POST["TBanheiros"];
        $tar = $_POST["TArCondionado"];
        $chassi = $_POST["chassis"];
        $placa = $_POST["placa"];
        if($tbam=='NAO'){
            $tbam=0;
        }
        else{
            $tbam=1;
        }
        if($tar=='NAO'){
            $tar=0;
        }
        else{
            $tar=1;
        }
        $sql = "INSERT INTO `onibus`(`id`, `marca`, `modelo`, `qtdAssentos`, `temBanheiro`, `temArCondicionado`, `chassis`, `placa`) VALUES ('$id','$marca','$modelo','$qtdA','$tbam','$tar','$chassi','$placa');";
        $resultado = mysqli_query($conn, $sql);
        $Valore.= "Onibus cadastrado com Sussesso";
    }
    echo $Valore;
}   
