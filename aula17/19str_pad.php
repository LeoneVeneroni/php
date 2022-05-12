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
        $nome = "Leone";
        $novo1 = str_pad($nome, 30, " ", STR_PAD_RIGHT); //Os espaços excedentes ficam à direita. Só é visível no código fonte.
        $novo2 = str_pad($nome, 30, " ", STR_PAD_LEFT); //Os espaços excedentes ficam à esquerda. Só é visível no código fonte.
        $novo3 = str_pad($nome, 30, " ", STR_PAD_BOTH); //A palavra fica no centro e os espaços excedentes ficam divididos nos lados. Só é visível no código fonte.
        print "Meu professor $novo1 é lindo! <br>";
        print "Meu professor $novo2 é lindo! <br>";
        echo "Meu professor $novo3 é lindo!";
    ?>
</div>
</body>
</html>
