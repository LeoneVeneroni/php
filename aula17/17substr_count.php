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
        $frase = "Aprendo PHP é no curso de PHP no Youtube";
        $cont = substr_count($frase, "PHP");
        print "PHP encontrado $cont vezes";
    ?>
</div>
</body>
</html>
