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
        $nome = "Maria";
        $vetor = str_split($nome);
        print_r($vetor);
        echo "<br>";
        $nome2 = "Jose da Silva";
        $vetor2 = str_split($nome2);
        print_r($vetor2);
    ?>
</div>
</body>
</html>
