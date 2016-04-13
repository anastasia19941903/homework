<html>
<head>
    <meta charset="utf-8">
    <title>Калькулятор </title>
<body>

<form method="get" action="15.php">

    <label for="username">Чиcло №1<br></label><input type="text" name="a"><br>
    <label for="username">Чиcло №2<br></label><input type="text" name="b"><br>
    <select name="operator">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
        <option>%</option>
    </select><br><br>
    <input type="submit" value="посчитать">
</form>
</body>
</html>
<?php

$a = $_GET['a'];
$b = $_GET['b'];
$operator = $_GET['operator'];

echo $a . $operator . $b . '=' ;

if ($operator = '+') {
    echo $a + $b;
}
elseif ($operator = '-') {
    echo $a - $b;
}
elseif ($operator = '*') {
    echo $a * $b;
}
elseif ($operator = '/') {
    echo $a / $b;
}
elseif ($operator = '%') {
    echo $a % $b;
}


