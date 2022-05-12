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
        $v = array("J", "V", "A", "Y", "H");
        print_r($v);
        asort($v); // Coloca os elementos em ordem crescente, mas os índices não permanecem ordenadas, pois eles continuam ligadas aos elementos.
        print_r($v);
        arsort($v); // Coloca os elementos em ordem decrescente, mas os índices não permanecem ordenadas, pois eles continuam ligadas aos elementos.
        print_r($v);
        ksort($v); // Coloca os índices em ordem crescente, mas os elementos continuam na ordem inicial.
        print_r($v);
        rsort($v); // Coloca os elementos e os índices em ordem decrescente.
        print_r($v);
        krsort($v); // Coloca os índices em ordem decrescente, mas os elementos continuam na ordem inicial.
        print_r($v);
        sort($v); // Coloca os elementos os índices em ordem crescente.
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
