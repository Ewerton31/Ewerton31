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
    $arquivo = fopen('Aluno.txt','r');
    While(!feof($arquivo)){
        $linha = fgets($arquivo);
        $colunaDados = explode(";",$linha);
        if($colunaDados[0] == $matricula){
            $nome = $colunaDados[1];
            $idade = $colunaDados[2];
            $data = $colunaDados[3];
            break;
        }
    }
    fclose($arquivo);
}    
?>
<form action= "Alterar_aluno.php" method = POST>
    Matricula:<input type= text name= "matricula"  value=<?php echo $matricula?> readonly><br>
    Nome:<input type= text name= "nome" value=<?php echo $nome ?>><br>
    email:<input type= text name= "email" value=<?php echo $idade ?>><br>
    Data Nascimento:<input type= text name= "dataNasc" value=<?php echo $data ?>><br>
    <input type="submit" value="alterar">
</form>
</body>
</html>