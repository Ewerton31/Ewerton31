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
<h1>Aluno Alterado com Sucesso</h1>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST["nome"];
    $nome_arquivo = $nome . ".txt";
    if(file_exists($nome_arquivo)){
        unlink($nome_arquivo);
    }
    else{
        echo "Arquivo não encontrado";
    }
}    
?>
<form action= "Excluir_arquivo.php" method = POST>
    Digite nome do Arquivo:<input type= text name= "nome" value=''><br>
    <input type="submit" value="Excluir">
</form>
</body>
</html>