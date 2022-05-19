<!DOCTYPE html>
<html>
<head>
<style type="text/css">
    body{
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%) 
    }
    </style>
</head>

<body>
<h1>Lista apenas um Aluno</h1>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $matricula = $_POST["matricula"];
    $arquivo = fopen('Aluno.txt','r+');
    if ($arquivo){
    while(true){ 
        $linha = fgets($arquivo);
        if ($linha==null) break;
        if(preg_match("/$matricula/", $linha)){
            echo nl2br("$linha\n");
        }
    }
    fclose($arquivo);
    }
}    
?>
<form action= "Lista_apenas_um_aluno.php" method = POST>
    Digite a Matrícula que deseja Listar:<input type= text name= "matricula" value=''><br>
    <input type="submit" value="Listar Matricula">
</form>
</body>
</html>