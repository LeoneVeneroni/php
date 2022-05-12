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
        $t = "Curso em Vídeo";
        $a = strlen($t);
        $b = mb_strlen($t);
        echo "$t <br>";
        echo "Usando strlen -> $a <br>";
        echo "Usando mb_strlen -> $b <br>";
        //Se usarmos a função 'mb_strlen', descobrimos o número real de caracteres de $t, que é $b. Contudo, se usarmos a função 'strlen', mostrará $a caracteres, pois essa função conta o acento como mais um caractere.";
    ?>
</div>
</body>
</html>
