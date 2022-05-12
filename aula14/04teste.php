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
        function leone() {
        	$t = func_num_args();
        	echo "Número de argumentos: $t";
        }
        leone (1,2,3);
    ?>
</div>
</body>
</html>
