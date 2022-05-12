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
        $vetor[0] = "Zeca";
        $vetor[1] = "em";
        $vetor[2] = "casa";
        $texto = implode("#", $vetor); //A função 'join' faz a mesma coisa que a função 'implode'.
        print "$texto <br>";
        print_r($vetor);
    ?>
</div>
</body>
</html>
