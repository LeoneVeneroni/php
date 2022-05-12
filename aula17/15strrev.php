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
        $nome = "Leone Santana de Melo Veneroni";
        $inv = strrev($nome); //Coloca a frase ao contrário
        echo "$inv";
        $inv2 = ucwords(strrev(strtolower($nome)));
        echo "<br> $inv2";
    ?>
</div>
</body>
</html>
