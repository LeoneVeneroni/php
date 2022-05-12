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
        $v = array(3 => 3,
        	       1 => 4,
        	       6 => 8,
        	       4 => 6);
        $v[] = 9; //Vai criar uma posição logo após a última criada, no caso a posição 6.
        unset($v[6]); //Esta função desaloca a posição indicada, mas o número de vetores continua o mesmo, ou seja, a posição 7 não se tornará 6, mas sim continuará sendo 7.
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
