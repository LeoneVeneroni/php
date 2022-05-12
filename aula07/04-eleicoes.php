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
        $ano = $_GET["an"];
        $idade = 2017 - $ano;
        echo "Quem nasceu en $ano tem idade de $idade anos";
        $tipo = ($idade>=18 && $idade<65)?"OBRIGATÓRIO":"FACULTATIVO";
        echo "<br>E dessa forma seu voto é $tipo";
    ?>
</div>
</body>
</html>
