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
        $nome = "Leone Veneroni";
        $nome2 = strtolower($nome); //Todos os caracteres ficam em letras minúsculas
        echo "Meu nome é $nome2. <br>";
        $nome3 = strtoupper($nome); //Todos os caracteres ficam em letras maiúsculas
        echo "Já disse, meu nome é $nome3.";
    ?>
</div>
</body>
</html>
