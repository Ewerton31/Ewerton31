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
    $arquivoAluno = fopen("Aluno.txt", "r") or die ("Arquivo com problema");
    echo "imprimir conteudo: " .fgets($arquivoAluno);
    fclose($arquivoAluno);
    $arquivoAluno2 = fopen("Aluno.txt","w") or die ("Arquivo com problema");
    $header ="matricula;nome;email;dataNasc\n";
    fwrite($arquivoAluno2,$header);
        $linha = $matricula . ";" . $nome . ";" . $emai. ";" . $data . "\n";
    fwrite($arquivoAluno2, $linha);
    fclose($arquivoAluno2);
    $arquivoAlunoIn = fopen("Aluno.txt","r") or die ("Arquivo com problema");
    while(!feof($arquivoAlunoIn)){
        $linhas [] = fgets($arquivoAlunoIn);
    }
    $arquivoAluno = fopen("Aluno2.txt", "w");
    fwrite($arquivoAluno, $header);
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