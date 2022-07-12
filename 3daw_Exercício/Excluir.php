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
<h1>Excluir</h1>
<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $id = $_GET["id"];
    $arquivo = fopen('Produto.txt','r+');
    $arquivo2 = fopen('Produto2.txt', 'w');
    if ($arquivo){
    while(true){ 
        $linha = fgets($arquivo);
        if ($linha==null) break;
        if(preg_match("/$id/", $linha)){
            echo nl2br("Arquivo Excluido com sucesso/n");
        } else {
        $string = $linha;
        fwrite($arquivo2, $string);
        }
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
    <form action= "Excluir.php" method = GET>
        <br>Digite a ID que deseja Excluir:<input type= text name= "id" value=''><br>
        <input type="submit" value="Excluir">
    </form>
</table>
</body>
</html