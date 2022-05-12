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
        $v[0] = 4;
        $v[1] = 8;
        $v[2] = 3;
        print_r($v); //Útil em períodos de teste
        echo "<br>";
        var_dump($v);
        echo "<br>";
        var_export($v);
        echo "<br>";
        $v2 = array(3,7,4,9,1,5);
        print_r($v2);
    ?>
</div>
</body>
</html>
