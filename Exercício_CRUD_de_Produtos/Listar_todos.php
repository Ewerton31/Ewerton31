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
<h1>Listar todos</h1>
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
        <form action= "Listar_um.php" method = POST>
            <input type="submit" value="Listar um">
        </form>
        <form action= "Excluir.php" method = POST>
            <input type="submit" value="Excluir">
        </form>
    </tr>
</table>
</body>
</html>