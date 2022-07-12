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
<h1>Excluir Aluno</h1>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $matricula = $_POST["matricula"];
    $arquivo = fopen('Aluno.txt','r+');
    $arquivo2 = fopen('Aluno2.txt', 'w');
    if ($arquivo){
    while(true){ 
        $linha = fgets($arquivo);
        if ($linha==null) break;
        if(preg_match("/$matricula/", $linha)){
            echo 'Arquivo Excluido com sucesso\n';
        } else {
        $string = $linha;
        fwrite($arquivo2, $string);
        }
        }
    fclose($arquivo);
    fclose($arquivo2);
    }
    $arquivo2 = fopen('Aluno2.txt','r+');
    $arquivo = fopen('Aluno.txt', 'w');
    if ($arquivo){
        while(true){ 
            $linha = fgets($arquivo2);
            if ($linha==null) break;
            $string = $linha;
            fwrite($arquivo, $string);
        }
        fclose($arquivo);
        fclose($arquivo2);
    }
}    
?>
<form action= "Excluir_Aluno.php" method = POST>
    Digite a Matrícula que deseja alterar:<input type= text name= "matricula" value=''><br>
    <input type="submit" value="Excluir">
</form>
</body>
</html>