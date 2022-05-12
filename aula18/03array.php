<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<pre>
		<table border="1">
    <?php
        $c = range(5,21,2); //O 1º número é o inicial, o 2º é o número limite, e o 3º é o passso.
        foreach ($c as $v) {
        	echo "<td>$v ";
        }
    ?>
        </table>
    </pre>
</div>
</body>
</html>
