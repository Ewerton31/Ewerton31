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
<h1>Usuario Alterado com Sucesso</h1>
<table>
    <tr>
        <form action= "Criar_Usuario.php" method = POST>
            <input type="submit" value="Criar">
        </form>
        <form action= "Alterar_Usuario.html" method = POST>
            <input type="submit" value="Alterar">
        </form>
        <form action= "Lista_todos_usuarios.php" method = POST>
            <input type="submit" value="Listar Todos">
        </form>
        <form action= "Lista_um_usuario.php" method = POST>
            <input type="submit" value="Listar um">
        </form>
        <form action= "Excluir_usuario.php" method = POST>
            <input type="submit" value="Excluir">
        </form>
    </tr>
</table>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    $function = $_POST["function"];
    $cont=0;
    $linha_final = $matricula . ";" . $nome . ";" . $function. "\n";
    $arquivo = fopen('Usuario.txt','r+');
    $arquivo2 = fopen('Usuario_Rarcunho.txt', 'w');
    if ($arquivo){
    while(true){ 
        $linha = fgets($arquivo);
        if ($linha==null) break;
        if(preg_match("/$matricula/", $linha)){
        $linha_inicio=$linha;
        $string = str_replace($linha_inicio, $linha_final, $linha);
        $colunaDados = explode(";",$string);
        $nome = $colunaDados[1];
        $function = $colunaDados[2];
        $cont = 1;
        } else {
        $string = $linha;
        }
        fwrite($arquivo2, $string);
        }
    fclose($arquivo);
    fclose($arquivo2);
    }
    $arquivo2 = fopen('Usuario_Rarcunho.txt','r+');
    $arquivo = fopen('Usuario.txt', 'w');
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
    if($cont==0){
        echo nl2br("Arquivo Não encontrado\n");
    }
}    
?>
<form action= "Alterar_Usuario.html" method = POST>
    Matricula:<input type= text name= "matricula" value=<?php echo $matricula ?> disabled=""><br>
    Nome:<input type= text name= "nome" value=<?php echo $nome ?> disabled=""><br>
    Função:<input type= text name= "function" value=<?php echo $function ?> disabled=""><br>
    <input type="submit" value="alterar outro">
</form>
</body>
</html>
