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
        $v = array("A", "Fel", 5, 3.2);
        echo "O vetor tem " .count($v). " elementos<br>";
        print_r($v);
        var_dump($v);
    ?>
    </pre>
</div>
</body>
</html>
