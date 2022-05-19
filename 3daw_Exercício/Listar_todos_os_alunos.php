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
<h1>Listar Todos os Aluno</h1>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $arquivo = fopen('Aluno.txt','r+');
    if ($arquivo){
    while(true){ 
        $linha = fgets($arquivo);
        if ($linha==null) break;
        $string = $linha;
        echo nl2br("$string\n");
    }
    fclose($arquivo);
    }
}    
?>
<form action= "Listar_todos_os_alunos.php" method = POST>
    <input type="submit" value="Listar Todos">
</form>
</body>
</html>