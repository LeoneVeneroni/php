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
        $n = isset($_GET["num"])?$_GET["num"]:1;
        $d = 0;
        echo "<h3>Analisando $n...</h3>";
        echo "Valores múltiplos: ";
        for ($c = 1; $c <= $n; $c++) {
        	if ($n % $c == 0) {
        		$v = $c;
        		$d++;
        		echo "$v ";
        	}
        }
        echo "<p>Total de múltiplos: $d </p>";
        if ($d > 2) {
        	echo "<h3>Resultado: $n <span class='foco'>NÃO É PRIMO</span></h3>";
        }
        else {
        	echo "<h4>Resultado: $n <span class='foco'>É PRIMO</span></h4>";
        }
    ?>
    <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
</div>
</body>
</html>
