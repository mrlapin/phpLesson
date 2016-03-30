<?php
	//Блок 1
//#1
    $x = 34;
    $y = 25.5;
    $z = true;
    $w = 'Hello';
    define("Pi", '3.14');
    echo $x ." ".$y ." " .$z ." " .$w ." " .Pi;
    echo "<br><br>";
//#2
	echo "$x"; //Вывод значений в интерпритируемой строке, Интерпритатор находя переменную выводит ее значение
    echo "<br>";
    echo "$y";
    echo "<br>"; 
    echo "$z";
    echo "<br>";
    echo "$w";
    echo "<br>";
    echo "Pi";
//#3
    echo "<br><br>";
    echo '$x'; // Выод не интерпритируемой строки. Интерпритатор выводит только то что написано внутри кавычек
    echo "<br>";
    echo '$y' ;
    echo "<br>"; 
    echo '$z';
    echo "<br>";
    echo '$w';
    echo "<br>";
    echo 'Pi';
    echo "<br><br>";
//#4    
    $str1 = "«Славная осень! Здоровый, ядреный <br>";
    $str2 = "Воздух усталые силы бодрит; <br>";
    $str3 = "Лед неокрепший на речке студеной <br>";
    $str4 = "Словно как тающий сахар лежит.» <br>";
    $str5 = "<u>Н. А. Некрасов</u><br>";
    
    echo $str1;
    echo $str2;
    echo $str3;
    echo $str4;
    echo $str5;
    
	echo "<br><br>";
//#5	
	echo $str1 .$str2 .$str3 .$str4 .$str5;
	echo "<br><br>";
	//Блок 2
//#6	
	$a = 10;
	$b = "20 Приветов";
	echo($a+$b); //Интерпритатор понимает переменную b как int
//#7	
	echo "<br><br>";
	$a = false;
	$b = true;
	echo($a xor $b); // Вывод 1
	$a = false;
	$b = false;
	echo($a xor $b); //Вывод NULL
	$a = true;
	$b = true;
	echo($a xor $b); //Вывод NULL
	$a = true;
	$b = false;
	echo($a xor $b); // Вывод 1
//#8	
	echo "<br><br>";
	$x = 10;
	$y = 15;
	$x = $y;
	$y -= 5;
	echo($x ."  " .$y);
?>
