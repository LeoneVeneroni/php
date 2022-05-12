<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $t = "Temos um texto gigante criado pelo php que vai mostrar o funcionamento da função wordwrap";
        $r = wordwrap($t, 10, "<br>\n", true); //o "\n" quebra linha no código fonte, uma vez que só "<br>"" não dá esse efeito. Se eu coloco "false", a palavra não será quebrada, mesmo se tiver mais do que os caracteres indicados, mas se coloco "true", haverá quebra de qualquer palavra com mais caractere do que o indicado, no caso 5.
        echo $r;
    ?>
</div>
</body>
</html>
