<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = "leoNe meLo";
        $nome2 = ucwords($nome); //Coloca a primeira letra de cada palavra em maiúscula
        echo "Teste 1: $nome. <br>";
        echo "Teste 2: $nome2. <br>";
        $nome3 = ucwords(strtolower($nome));
        echo "Teste 3: $nome3. <br>";
    ?>
</div>
</body>
</html>
