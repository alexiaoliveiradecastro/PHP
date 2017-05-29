<html>
<head>
<title>Exemplo 15</title>
</head>
  <body>
    <h1>Exemplo 15</h1>
  <?php
    function mais5($numero){
    $numero += 5;
    }
    echo"<h1>Passagem de parâmetro</h1>";
    $a=3;
    mais5($a);
    echo"Valor Variável a = $a <br>";
  ?>
  </body>
</html>
