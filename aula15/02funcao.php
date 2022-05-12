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
        include "funcoes.php"; //Caso não existe o arquivo "funcoes.php", o comando 'include' mostra tudo que não exija tal arquivo, já o comando 'require' mostrará apenas mensagens de erro. Caso o arquivo chamado exista, esses comandos fazem a mesma coisa. Ainda existem os comando 'include_once' e 'require_once'. Esses comando indicam se você já carregou o include/require, não precisa carregar de novo, se você ainda carregou, carregue.
        echo "<h1>Testando o include</h1>";
        ola();
        mostraValor(5);
        echo "<p>Finalizando o programa...</p>";
    ?>
</div>
</body>
</html>
