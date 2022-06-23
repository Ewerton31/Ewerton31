<?php
$user = 'root';
$pass='';
$com = new PDO ('mysql:host=localhost;dbname=faeterj3DawManha', $user,$pass);
$sql ="SELECT * FROM 'Usuario'";
$result = $conn->query($sql);
$linhaUsuario = $result ->fetch(PDO::FETCH_ASSOC);
$usuario = json_onde($linhaUsuario, JSON_UNESCAPED_UNICODE);
echo $Usuario;
?>