<?php
require_once("connector.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>
    <link rel="stylesheet" href="_css/jogos.css">

    <style>
        .jogos {
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 10px;
            transition: 0.5s ease-in-out;
            width: 150px;
            justify-content: center;
        }

        .jogos img {
            width: 150px;
            margin: 0 auto;
        }

        .jogos a {
            text-decoration: none;
        }

        .jogos h2 {
            color: green;

        }

        .jogos:hover {
            box-shadow: 2px 2px 20px rgba(111, 0, 255, 0.6);
            width: 170px;
        }

        #gradeJogos {
            display: flex;
            width: 100%;
            border-radius: 10px;
            margin-top: 20px;
            gap: 10px;
            justify-content: center;
        }

        .pesquisa {
            display: flex;
            flex-direction: row;
            justify-items: stretch;
        }

        #botaoPesquisa {
            width: 60px;
            height: 30px;
        }
    </style>

</head>

<body>
    <div id="interface">
        <span id="titulo">
            <h1>Mods de Jogos</h1>
        </span>
        <span id="subtitulo">
            <h2>Tá <span id="liso">liso</span>? esse é o lugar <span id="certo">certo</span>!</h2>
        </span>

        <div class="">
            <form method="post" action="">
                <input type="text" class="pesquisa" placeholder="Pesquisar Mods" name="pesquisa"/>
                <input type="submit" value="Pesquisar">
            </form>
        </div>

        <div id="gradeJogos">
            <?php mostraJogos($connect); ?>
        </div>
        <?php
          if (isset($_POST['pesquisar'])){
            pesquisa($connect);
            header('location: pesquisa.php');
          }
        ?>
    </div>
</body>

</html>