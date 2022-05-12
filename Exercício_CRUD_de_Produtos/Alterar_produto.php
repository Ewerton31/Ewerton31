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
<h1>Alterar Produto</h1>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST["id"];
    $arquivoAlunoIn = fopen("produtos.txt", "r") or die ("Arquivo com problema");
    while(!feof($arquivoAlunoIn)){
        $linhas[] = fgets($arquivoAlunoIn);
        if($colunaDados[0] = $id){
            $nome=$colunaDados[3];
            $emai=$colunaDados[5];
            $data=$colunaDados[7];
        }
    }  
    $arquivoAluno = fopen("Aluno2.txt", "w");
    $header ="matricula;nome;email;dataNasc\n";
    $linha = $matricula . ";" . $nome . ";" . $emai. ";" . $data . "\n";
    fwrite($arquivoAluno, $header);
    fwrite($arquivoAluno, $linha);
    fclose($arquivoAluno);  
}    
?>
<table>
    <tr>
        <form action= "Incluir_produto.php" method = POST>
            <input type="submit" value="Incluir">
        </form>
        <form action= "Alterar_produto.html" method = POST>
            <input type="submit" value="Alterar">
        </form>
        <form action= "Listar_todos.php" method = POST>
            <input type="submit" value="Listar Todos">
        </form>
        <form action= "Listar_um.html" method = POST>
            <input type="submit" value="Listar um">
        </form>
        <form action= "Excluir.html" method = POST>
            <input type="submit" value="Excluir">
        </form>
    </tr>
</table>
<form action= "Alterar_produto.html" method = POST>
    Nome:<input type= text name= "nome" value=''><br>
    Código de barras:<input type= text name= "cod" value=''><br>
    Descrição:<input type= text name= "descrição" value=''><br>
    URL da imagem do produto:<input type= text name= "imagem" value=''><br>
    Valor:<input type= text name= "valor" value=''><br>
    Quantidade:<input type= text name= "quantidade" value=''><br>
    Peso:<input type= text name= "peso" value=''><br>
    <input type="submit" value="Alterar">
</form>

</body>
</html>