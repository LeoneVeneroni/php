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
        $site = "Curso em Video";
        $sub1 = substr($site, 0, 5);
        $sub2 = substr($site, 5);
        $sub3 = substr($site, 2, 5);
        $sub4 = substr($site, 0, 8);
        $sub5 = substr($site, 2, 8);
        $sub6 = substr($site, 8);
        $sub7 = substr($site, 0, -5);
        $sub8 = substr($site, 4, -5);
        $sub9 = substr($site, 6, -1);
        echo "$sub1 <br>";
        echo "$sub2 <br>";
        echo "$sub3 <br>";
        echo "$sub4 <br>";
        echo "$sub5 <br>";
        echo "$sub6 <br>";
        echo "$sub7 <br>";
        echo "$sub8 <br>";
        echo "$sub9 <br>";
    ?>
</div>
</body>
</html>
