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
        $e = isset($_GET["tEst"])?$_GET["tEst"]:0;
        switch($e) {
        	case 'no':
        	$e = "Região Norte";
        	break;

        	case 'ne':
        	$e = "Região Nordeste";
        	break;

        	case 'co':
        	$e = "Região Centro-Oeste";
        	break;

        	case 'se':
        	$e = "Região Sudeste";
        	break;

        	case 'su':
        	$e = "Região Sul";
        	break;

        	default:
        	$e = "Dado inválido";
        }
        echo "Você mora na <span class='foco'>$e</span>";
    ?><br>
    <a href="exercicio03.html" class="botao">Voltar</a>
</div>
</body>
</html>
 