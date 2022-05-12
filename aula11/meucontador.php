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
        $a = isset($_GET["ini"])?$_GET["ini"]:1;
        $b = isset($_GET["fin"])?$_GET["fin"]:1;
        $c = isset($_GET["inc"])?$_GET["inc"]:1;
       	while ($a <= $b) {
       		echo "$a <br>";
       		$a = $a + $c;
        }
    ?><br>
    <a href="meucontador.html"><span class="botao">Voltar</span></a>
</div>
</body>
</html>
