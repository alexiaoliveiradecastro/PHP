<html>
<head>
<title>Exemplo 14.3</title>
</head>
<body>
<h1>Exemplo 14.3</h1>
<?php
function testeStatic(){
static $a=0;
$a += 25;
echo "Valor dá Variável a = $a <br>";
}
echo"<h1>Variável estática</h1>";
testeStatic();
testeStatic();
testeStatic();
?>
</body>
</html>
