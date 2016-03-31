<?php

$a = $_POST['a'];
$b = $_POST['b'];
$operator = $_POST['operator'];

    if (is_numeric($a) && is_numeric($b)) {

        if ($operator === '+') {
            $res = $a + $b;
        }  elseif ($operator === '-') {
            $res = $a - $b;
        } elseif ($operator === '*') {
            $res = $a * $b;
        } elseif ($b == 0) {
            $res = ' на ноль не делю';
        } else {
            $res = $a / $b;
        }
        include('index.php');

    } else {
        $warning = 'Пожалуйста, введите числа';
        include('index.php');
    }

?>