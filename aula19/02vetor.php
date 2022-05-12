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
        array_push($v, "W"); // É a mesma coisa que $v[] = "W".
        print_r($v);
        array_pop($v); //É similar à função unset($v[]). Desaloca um elemento do vetor.
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
