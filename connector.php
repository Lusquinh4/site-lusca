<?php

$servername = "ns904.hostgator.com.br";
$username = "luscac91_admin";
$password = "L8u6c8a7s";
$database = "luscac91_lusca";

$connect = mysqli_connect($servername, $username, $password, $database);

function mostraJogos($connect)
{
    $query = "SELECT * FROM jogos";
    $execute = mysqli_query($connect, $query);

    if (mysqli_num_rows($execute) > 0) {
        while ($row = mysqli_fetch_assoc($execute)) {
            echo "<div class='jogos'>";
            echo "<a href='" . $row['link'] . "'>";
            echo "<img src='" . $row['imagem'] . "'>";
            echo "<h2>" . $row['nome'] . "</h2>";
            echo "</a></div>";
        }
    } else {
        echo "0 resultados";
    }
}

function pesquisa($connect)
{
    $pesquisa = isset($_POST['pesquisa']);
    echo $pesquisa;
    
    /* $query = "SELECT * FROM jogos WHERE nome = '$pesquisa%'"; 
    $execute = mysqli_query($connect, $query);

    if (mysqli_num_rows($execute) > 0) {
        while ($row = mysqli_fetch_assoc($execute)) {
            echo "<div class='jogos'>";
            echo "<a href='" . $row['link'] . "'>";
            echo "<img src='" . $row['imagem'] . "'>";
            echo "<h2>" . $row['nome'] . "</h2>";
            echo "</a></div>";
        }
        }else {
            echo "0 resultados";
        }*/
    } 
