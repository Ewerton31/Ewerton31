<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once("conexao.php");
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $qtdA = $_POST["qtdAssentos"];
    $tbam = $_POST["TBanheiros"];
    $tar = $_POST["TArCondionado"];
    $chassi = $_POST["chassis"];
    $placa = $_POST["placa"];
    $sql = "INSERT INTO `onibus`(`Marca`, `Modelo`, `qtdAssentos`, `temBanheiro`, `temArCondicionado`, `Chassis`, `Placa`) VALUES ('$marca','$modelo','$qtdA','$tbam','$tar','$chassi','$placa');";
    $resultado = mysqli_query($conn, $sql);
}    
