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
        $frase = "Eu vou dançar. Cadê?";
        $cont = str_word_count($frase, 0, "çê"); //Se colocar '0', essa função mostra o número de palavras da string.
        $cont2 = str_word_count($frase, 1, "çê"); //Se eu coloco '1', ele gera um vetor que manté a posição de cada palavra da string.
        $cont3 = str_word_count($frase, 2, "çê"); //Se eu coloco '2', ele gera um vetor que mantém a posição de cada letra da string.
        echo "$cont <br>";
        print_r($cont2);
        echo "<br>";
        print_r($cont3);
    ?>
</div>
</body>
</html>
