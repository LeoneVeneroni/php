<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $frase1 = "Gosto de estudar Matemática! Matemática é legal.";
        $novafrase1 = str_replace("Matemática", "PHP", $frase1);
        $novafrase2 = str_replace("matemática", "PHP", $frase1);
        $novafrase3 = str_ireplace("matemática", "PHP", $frase1);
        echo "$frase1 <br>"; //Frase original
        echo "$novafrase1 <br>"; //Palavra trocada
        echo "$novafrase2 <br>";//Frase não trocado, pois a função str_replace é sensível à caixa do texto.
        echo "$novafrase3";//Frase trocada, pois a função str_ireplace não é sensíveç à ciaxa do texto.
    ?>
</div>
</body>
</html>
