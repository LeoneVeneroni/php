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
        $v = array("A", "J", "V", "Y", "H");
        print_r($v);
        array_unshift($v, "T"); // Adiciona um elemento na primeira posição, ao invés de colocar no final como o array_push faz.
        print_r($v);
        array_shift($v); // Desaloca o primeiro elemento do vetor.
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
