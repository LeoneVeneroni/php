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
        $c = 0;
        do {
        	echo "$c ";
        	$c+=3;
        }while ($c <= 21);
        echo "<br>";
        $d = 21;
        do {
        	echo "$d ";
        	$d-=3;
        }while ($d >= 0);
    ?>
</div>
</body>
</html>
