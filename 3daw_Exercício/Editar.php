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
    /*$arquivoAluno = fopen("Aluno.txt", "r") or die ("Arquivo com problema");
    $arquivoAluno2 = fopen("Aluno2.txt","w") or die ("Arquivo com problema");
    $header ="matricula;nome;email;dataNasc\n";
    fwrite ($arquivoAluno2 , $header);
    while(!feof($arquivoAluno)){
        $linhas [] = fgets($arquivoAluno);
        echo $linhas[0];
        $colunaDados = explode (";", $linha);
        
        if($colunaDados[0] = $matricula){
            echo $colunaDados[0];
            $colunaDados[2] = $nome;
            $colunaDados[4] = $emai;
            $colunaDados[6] = $data;
        }
        fwrite($arquivoAluno2, $linha);
    }
    fclose($arquivoAluno);
    fclose($arquivoAluno2);*/
    // abre o arquivo colocando o ponteiro de escrita no final
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
<form action= "Editar.php" method = POST>
    Digite a Matrícula que deseja alterar:<input type= text name= "matricula" value=''><br>
    Nome:<input type= text name= "nome" value=''><br>
    email:<input type= text name= "email" value=''><br>
    Data Nascimento:<input type= text name= "dataNasc" value=''><br>
    <input type="submit" value="alterar">
</form>
</body>
</html>