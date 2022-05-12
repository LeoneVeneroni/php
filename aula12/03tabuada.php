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
        $t = isset($_GET["tab"])?$_GET["tab"]:1;
        echo "<h1>Mostrando a tabuada de $t</h1>";
        $n = 1;
        do {
        	$r = $t*$n;
        	echo "$t x $n = $r <br>";
        	$n++;
        }while ($n <= 10);
    ?>
    <p><a href="03tabuada.html" class="botao">Voltar</a></p>
</div>
</body>
</html>
 