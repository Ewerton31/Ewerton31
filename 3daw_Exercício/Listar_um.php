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

<h1>Listar um</h1>
<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $ID = $_GET["id"];
    $arquivo = fopen('Produto.txt','r+');
    if ($arquivo){
    while(true){ 
        $linha = fgets($arquivo);
        if ($linha==null) break;
        if(preg_match("/$ID/", $linha)){
            echo nl2br("$linha\n");
        }
    }
    fclose($arquivo);
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
<form action= "Listar_um.php" method = GET>
    Digite a ID que deseja Listar:<input type= text name= "id" value=''><br>
    <input type="submit" value="Listar Produto">
</form>
</body>
</html