<?php
require_once("connector.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
</head>
<body>
    <?php 
        $pesquisa = isset($_POST['pesquisa']);
        pesquisa($connect);
    ?>
</body>
</html>