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
        $nome = "leone sAnTana";
        $nome2 = ucfirst($nome); //Coloca somente a primeira letra do texto em maiúscula
        echo "Teste 1: $nome. <br>";
        echo "Teste 2: $nome2. <br>";
        $nome3 = ucfirst(strtolower($nome));
        echo "Teste 3: $nome3. <br>";
    ?>
</div>
</body>
</html>
