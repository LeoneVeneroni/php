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
        $c = 1;
        while ($c < 10){
        	echo "$c";
        	$c++; //É equivalente a $c+=1 e $c=$c+1
        }
        $c = 10;
        while ($c >= 1){
        	echo "$c";
        	$c--; //É equivalente a $d-=1 e $d=$d-1
        }
        echo "<br>";
        $c = 1;
        while ($c <= 10) {
        	echo "$c <br>";
        	$c+=2; //É equivalente a $c=$c+2.
        }
        $c = 9;
        while ($c >= 0) {
        	echo "$c <br>";
        	$c-=3; //É equivalente a $c=$c-3
        }
    ?>
</div>
</body>
</html>
 