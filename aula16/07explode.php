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
        $site = "Site do Cavalo";
        $vetor = explode(" ", $site);
        print_r($vetor);
        echo "<br>";
        $vetor2 = explode("e", $site);
        print_r($vetor2);
        echo "<br>";
        $vetor3 = explode("a", $site);
        print_r($vetor3);
    ?>
</div>
</body>
</html>
