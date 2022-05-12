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
        $m = array( array(3,5),
                    array(2,9),
                    array(8,2),
                    array(3,0));
        $m[0][1] = $m[2][0]; //O elemento da 1ª linha e 2ª segunda coluna (nª 5) vai assumir o valor do elemento da 3ª linha e 1ª coluna (nº8).
        print_r($m);
    ?>
    </pre>
</div>
</body>
</html>
