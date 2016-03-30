<?php
	// p1
	$a = 12;
	$b = -3;
	function difvar($x, $y){
		if($x > 0 && $y > 0){
			if($x > $y)
			echo($x - $y);
			else echo($y - $x);
		}
		else if($x < 0 && $y < 0){
			echo($x * $y);
			}
		else echo $x + $y;
	}
	echo difvar($a, $b);
	echo("<br>");
	//p2
	$a = 6;
	switch($a){
		case 1:
		echo "1 2 3 4 5 6 7 8 9 10 11 12 13 14 15";
		break;
		case 2:
		echo "2 3 4 5 6 7 8 9 10 11 12 13 14 15";
		break;
		case 3:
		echo "3 4 5 6 7 8 9 10 11 12 13 14 15";
		break;
		case 4:
		echo "4 5 6 7 8 9 10 11 12 13 14 15";
		break;
		case 5:
		echo "5 6 7 8 9 10 11 12 13 14 15";
		break;
		case 6:
		echo "6 7 8 9 10 11 12 13 14 15";
		break;
		case 7:
		echo "7 8 9 10 11 12 13 14 15";
		break;
		case 8:
		echo "8 9 10 11 12 13 14 15";
		break;
		case 9:
		echo "9 10 11 12 13 14 15";
		break;
		case 10:
		echo "10 11 12 13 14 15";
		break;
		case 11:
		echo "11 12 13 14 15";
		break;
		case 12:
		echo "12 13 14 15";
		break;
		case 13:
		echo "13 14 15";
		break;
		case 14:
		echo "14 15";
		break;
		case 15:
		echo "15";
		break;
			}
	echo("<br>");
	//p3
	function mult($a, $b){
		return $a * $b;
	}
	function div($a, $b){
		return $a / $b;
	}
	function sub($a, $b){
		return $a - $b;
	}
	function add($a, $b){
		return $a + $b;
	}
	//p4
	function mathOperation($arg1, $arg2, $operation){
		switch($operation){
			case '*':
			echo(mult($arg1, $arg2));
			break;
			case '/':
			echo(div($arg1, $arg2));
			break;
			case '-':
			echo(sub($arg1, $arg2));
			break;
			case '+':
			echo(add($arg1, $arg2));
			break;			
		}
	}
	mathOperation(3, 567765, '-');
	echo("<br>");
	//p5
	function power($val, $pow){
		if($pow == 1)
			return $val;
		else
			return $val * power($val, $pow-1);
	}
	echo(power(23, 3));
	echo("<br>");
	//p6
	function exact_time(){
		$hours = date('H');

		function minutes(){
			$minutes = date('i');
			if ($minutes % 10 == 1 && $minutes != 11)
				echo ($minutes .' минута');
			elseif (($minutes % 10 == 2 || $minutes % 10 == 3 || $minutes % 10 == 4) && $minutes != 11 && $minutes != 12 && $minutes != 13 && $minutes!= 14 && $minutes != 00)
				echo ($minutes .' минуты');
			else
				echo($minutes .' минут');
				}
		function hours(){
			$hours = date('H');
			if($hours == 1 || $hours == 21)
				echo($hours .' час ');
			elseif(($hours > 1 && $hours < 5)|| ($hours > 21 && $hours < 25))
				echo($hours .' часа ');
			else
				echo($hours .' часов ');	
		}

			echo ("<br>".hours() .minutes());
	}
	exact_time();
	