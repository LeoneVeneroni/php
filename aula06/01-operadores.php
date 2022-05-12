<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css">
	<title>Curso de PHP</title>
</head>
<body>
<div>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é R$" .number_format($preco,2,",",".");
        $preco += $preco*0.1;
        echo "<br>O novo preço com 10% de aumento será R$" .number_format($preco,2,",",".");
    ?>
</div>
</body>
</html>
