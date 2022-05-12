<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<pre>
    <?php
        $v = array("nome" => "Ana",
                   "idade" => 45,
                   "peso" => 56.4);
        $v["fuma"] = true; //Se eu coloco 'true', aparece 1. Se eu coloco 'false', não aparece nada. Eu podeira ter colocado isso dentro do array acima.
        foreach ($v as $k => $c) {
        	echo "O campo $k possui o conteúdo $c <br>";
        }
    ?>
    </pre>
</div>
</body>
</html>
