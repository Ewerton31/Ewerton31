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
    if ($arquivo){
    while(true){ 
        $linha = fgets($arquivo);
        if ($linha==null) break;
        // busca na linha atual o conteudo que vai ser alterado
        if(preg_match("/$matricula/", $linha)){
        $linha_inicio=$linha;
        $string .= str_replace($linha_inicio, $linha_final, $linha);
        } else { 
        // vai colocando tudo numa nova string
        $string .= $linha;
        }
    }
    // move o ponteiro para o inicio pois o ftruncate() nao fara isso
    rewind($arquivo);
    // truca o arquivo apagando tudo dentro dele
    ftruncate($arquivo, 0);
    // reescreve o conteudo dentro do arquivo
    if (!fwrite($arquivo, $string)) die('Não foi possível atualizar o arquivo.');
    echo 'Arquivo atualizado com sucesso';
    fclose($arquivo);
}
}    
?>
<form action= "Ler_arquivo_e_escrever_em_outro.php" method = POST>
    Digite a Matrícula que deseja alterar:<input type= text name= "matricula" value=''><br>
    Nome:<input type= text name= "nome" value=''><br>
    email:<input type= text name= "email" value=''><br>
    Data Nascimento:<input type= text name= "dataNasc" value=''><br>
    <input type="submit" value="alterar">
</form>
</body>
</html>