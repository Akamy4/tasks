<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $R = 5 + (2 / 3);
    $D = 2+200;
    $H = (2 % 20) + 10;
    $M = pow(2,$H);
    echo "===============================================<br>";
    echo "Глубина рекурсии = $R"."<br>";
    echo "Диаметр сети = $D"."<br>";
    echo "Количество запросов = $H"."<br>";
    echo "Количество компьютеров в сети = $M"."<br>";
    echo "==============================================<br>";
    $M = pow(2, $H * 2);
    echo "Диаметр сети не влияет на количество запросов"."<br>";
    echo "Количество компьютеров в сети = $M"."<br>";
    ?>
  </body>
</html>