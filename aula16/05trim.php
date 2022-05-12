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
        $n = "   Leone San Mel   ";
        echo(strlen($n));
        echo($n);
        echo(strlen($n));
        echo "<br>";
        $m = trim($n); //A função 'trim' remove os espaços em branco antes da primeira letra e os depois da última letra.
        echo(strlen($m)); //contagem
        echo($m);
        echo(strlen($m)); //contagem
        echo "<br>";
        $o = ltrim($n); //A função 'ltrim' só remove os espaços anteriores da primeira palavra.
        echo(strlen($o)); //contagem
        echo($o);
        echo(strlen($o)); //contagem
        echo "<br>";
        $p = rtrim($n); //A função 'rtrim' só remove os espaços posteriores da última palavra.
        echo(strlen($p)); //contagem
        echo($p);
        echo(strlen($p)); //contagem
    ?>
</div>
</body>
</html>
