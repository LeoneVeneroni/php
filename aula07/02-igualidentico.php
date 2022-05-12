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
        $a = 3;
        $b = "3";
        $r1 = ($a == $b)?"SIM":"NÃO";
        echo "A variáveis são iguais? $r1"; //São iguais pois ambas são 3.
        $r2 = ($a === $b)?"SIM":"NÃO";
        echo "<br>A variáveis são iguais? $r2"; //São diferentes pois uma é string e a outra é um número.
    ?>
</div>
</body>
</html>
