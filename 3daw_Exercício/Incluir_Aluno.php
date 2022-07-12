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
    if(!file_exists("Aluno.txt")){
        $header ="matricula;nome;email;dataNasc\n";
        $arquivoAluno = fopen("Aluno.txt","w");
        fwrite ($arquivoAluno , $header);
        fclose($arquivoAluno);
    }
    $arquivoAluno = fopen("Aluno.txt","a") or die ("Arquivo com problema");
    $linha = $matricula . ";" . $nome . ";" . $emai. ";" . $data . "\n";
    fwrite($arquivoAluno, $linha);
    fclose($arquivoAluno);
}    
?>
<form action= "incluir_aluno.php" method = POST>
    Matrícula:<input type= text name= "matricula" value=''><br>
    Nome:<input type= text name= "nome" value=''><br>
    email:<input type= text name= "email" value=''><br>
    Data Nascimento:<input type= text name= "dataNasc" value=''><br>
    <input type="submit" value="enviar">
</form>

</body>
</html>