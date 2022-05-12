<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
    <style type="text/css">
    	span{
    		color: red;
    		font-weight: bold;
        }
    </style>
</head>
<body>
<div>
    <?php
        $n1 = isset($_GET["nota1"])?$_GET["nota1"]:"insira a nota 1";
        $n2 = isset($_GET["nota2"])?$_GET["nota2"]:"insira a nota 2";
        $m = ($n1 + $n2)/2;
        if ($m >= 7 && $m <= 10) {
        	$s = "APROVADO";
        }
        elseif ($m >= 4 && $m < 7){
        	$s = "RECUPERAÇÃO";
        }
        elseif ($m < 4) {
        	$s = "REPROVADO";
        }
        echo "A média do aluno é <span>$m</span> <br>";
        echo "Situação do aluno: <span>$s</span>";
    ?><br>
    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>
