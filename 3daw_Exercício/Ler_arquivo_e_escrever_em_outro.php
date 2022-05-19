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
<h1>Incluir Aluno</h1>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $matricula = $_POST["matricula"]; //csv é um formato de texto para linhaXColuna
    $nome = $_POST["nome"];
    $emai = $_POST["email"];
    $data = $_POST["dataNasc"];
    $linha_final = $matricula . ";" . $nome . ";" . $emai. ";" . $data . "\n";
    $arquivo = fopen('Aluno.txt','r+');
    $arquivo2 = fopen('Aluno2.txt', 'w');
    if ($arquivo){
    while(true){ 
        $linha = fgets($arquivo);
        if ($linha==null) break;
        if(preg_match("/$matricula/", $linha)){
        $linha_inicio=$linha;
        $string = str_replace($linha_inicio, $linha_final, $linha);
        } else {
        $string = $linha;
        }
        fwrite($arquivo2, $string);
        }
    fclose($arquivo);
    fclose($arquivo2);
    }
}    
?>
<form action= "Editar.php" method = POST>
    Digite a Matrícula que deseja alterar:<input type= text name= "matricula" value=''><br>
    Nome:<input type= text name= "nome" value=''><br>
    email:<input type= text name= "email" value=''><br>
    Data Nascimento:<input type= text name= "dataNasc" value=''><br>
    <input type="submit" value="alterar">
</form>
</body>
</html>
