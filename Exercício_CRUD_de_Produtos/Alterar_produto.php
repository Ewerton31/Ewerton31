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
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $id = $_GET["id"];
    $nome = $_GET["nome"];
    $codigo = $_GET["cod"];
    $descrição = $_GET["descrição"];
    $imagem = $_GET["imagem"];
    $valor = $_GET["valor"];
    $quant = $_GET["quantidade"];
    $peso = $_GET["peso"];
    $linha_final = $id . ";" . $nome . ";" . $codigo. ";" . $descrição .";" . $imagem .";" . $valor .";" . $quant .";" . $peso . "\n";
    $arquivo = fopen('Produto.txt','r+');
    $arquivo2 = fopen('Produto2.txt', 'w');
    if ($arquivo){
    while(true){ 
        $linha = fgets($arquivo);
        if ($linha==null) break;
        if(preg_match("/$id/", $linha)){
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
    $arquivo2 = fopen('Produto2.txt','r+');
    $arquivo = fopen('Produto.txt', 'w');
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
<table>
    <tr>
        <form action= "Incluir_produto.php" method = POST>
            <input type="submit" value="Incluir">
        </form>
        <form action= "Alterar_produto.php" method = POST>
            <input type="submit" value="Alterar">
        </form>
        <form action= "Listar_todos.php" method = POST>
            <input type="submit" value="Listar Todos">
        </form>
        <form action= "Listar_um.php" method = POST>
            <input type="submit" value="Listar um">
        </form>
        <form action= "Excluir.php" method = POST>
            <input type="submit" value="Excluir">
        </form>
    </tr>
</table>
<form action= "Alterar_produto.php" method = GET>
    Digite o ID a ser alterado:<input type= text name= "id" value=''><br>
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
