<?php 
require_once("connector.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros gerais</title>
</head>

<body>
    <form action="" method="post" name="cadastro" enctype="multipart/form-data">
        <input type="text" name="nome" id=""><br><br>
        <input type="text" name="link" id=""><br><br>
        <input type="file" name="imagem" id=""><br><br>
        <input type="submit" value="Cadastrar" name="enviar">
    </form>
      <?php
      if (isset($_POST['enviar'])) {
          $nome = $_POST['nome'];
          $link = $_POST['link'];

          //diretório de destino da imagem
          $pastaDestino = "_imagens/";
        
                // Check if file was uploaded before using basename
                if(isset($_FILES['imagem']) && $_FILES['imagem']['name'] != '') {
                    $caminhoImagem = $pastaDestino . basename($_FILES['imagem']['name']);
                    move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem);
                } else {
                    $caminhoImagem = ''; // or set a default image path
                }

          //adicionar ao bd
          $query = "INSERT INTO jogos (nome, link, imagem) Values ('$nome', '$link', '$caminhoImagem')";
          $execute = mysqli_query($connect, $query);
          if ($execute) {
              echo "Jogo cadastrado com sucesso";
          } else {
              echo "Erro ao cadastrar";
          }
      }
      ?>
</body>

</html>