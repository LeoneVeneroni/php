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
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP"); //Vai indicar a posição do primeiro P de PHP. Essa função é sensível a minúsculo/maiúsculo.
        echo "$frase <br> A string foi encontrada na posição $pos <br>";
        $pos2 = strpos($frase, "php"); //Vai deixar um espaço em branco, pois PHP está em maiúsculo e eu pedi minúsculo.
        echo "$frase <br> A string foi encontrada na posição $pos2 <br>";
        $pos3 = stripos($frase, "php"); //A função stripos ignora se é minúsculo ou maiúsculo. Então vai mostar o mesmo da primeira frase.
        echo "$frase <br> A string foi encontrada na posição $pos3";
    ?>
</div>
</body>
</html>
