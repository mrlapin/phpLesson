<?php
// p1
	$x = 1;
	while ($x <= 100){
		if($x % 3 ==0){
		echo("$x ");
		}
		$x++;
	}
	echo("<br>");
//p2
	function evenOdd(){
		$i = 0;
		do{
			if($i==0){
			echo "$i - это ноль <br>";
			}
			elseif($i % 2 == 0){
				echo("$i - это четное число <br>");
			}
			else echo("$i - это нечетное число <br>");
			$i++;
		}while($i <= 10);
	}
	evenOdd();
	
//p3
	
	$allCity = array(
		"Ленинградская Область" =>array("Бокситогорск","Волосово","Волхов","Всеволожск","Выборг","Высоцк","Гатчина","Ивангород","Каменногорск","Кингисепп","Кириши","Кировск","Коммунар","Лодейное Поле","Луга","Любань","Никольское","Новая Ладога","Отрадное","Пикалево","Подпорожье","Приморск","Приозерск","Светогорск","Сертолово","Сланцы","Сосновый Бор","Сясьстрой","Тихвин","Тосно","Шлиссельбург"),
		"Липецкая Область" => array("Грязи","Данков","Елец","Задонск","Лебедянь","Липецк","Усмань","Чаплыгин"),
		"Московская Область" => array("Апрелевка","Балашиха","Бронницы","Верея","Видное","Волоколамск","Воскресенск","Высоковск","Голицыно","Городской округ Черноголовка","Дедовск","Дзержинский","Дмитров","Долгопрудный","Домодедово","Дрезна","Дубна","Егорьевск","Железнодорожный","Жуковский","Зарайск","Звенигород","Ивантеевка","Истра","Истра-1","Кашира","Кашира-8","Климовск","Клин","Коломна","Королев","Котельники","Красноармейск","Красногорск","Краснозаводск","Краснознаменск","Кубинка","Куровское","Ликино-Дулево","Лобня","Лосино-Петровский","Луховицы","Лыткарино","Люберцы","Можайск","Мытищи","Наро-Фоминск","Ногинск","Одинцово","Ожерелье","Озеры","Орехово-Зуево","Павловский Посад","Пересвет","Подольск","Протвино","Пушкино","Пущино","Раменское","Реутов","Рошаль","Руза","Сергиев Посад","Сергиев Посад-7","Серпухов","Снегири","Солнечногорск","Солнечногорск-2","Солнечногорск-25","Солнечногорск-30","Солнечногорск-7","Старая Купавна","Ступино","Талдом","Фрязино","Химки","Хотьково","Черноголовка","Чехов","Чехов-2","Чехов-3","Чехов-8","Шатура","Щелково","Электрогорск","Электросталь","Электроугли","Юбилейный","Яхрома"),
		"Нижегородская Область" =>array("Арзамас","Балахна","Богородск","Бор","Ветлуга","Володарск","Ворсма","Выкса","Горбатов","Городец","Дзержинск","Заволжье","Княгинино","Кстово","Кулебаки","Лукоянов","Лысково","Навашино","Нижний Новгород","Павлово","Первомайск","Перевоз","Саров","Семенов","Сергач","Урень","Чкаловск","Шахунья")
		);
		foreach($allCity as $state => $city){
			echo ("<h3>$state</h3>");
			foreach ($city as $allCity){
				echo ("$allCity, ");
			}
			echo("<br>");
		}
	
//p6

	for($i = 0; $i < 10; $i++)
	echo($i);
	echo("<br>");

//p4

	function rusTrl($str){
		$trl = array('а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'й'=>'j', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'x', 'ц'=>'c', 'ч'=>'ch', 'ш'=>'sh', 'щ'=>'sch', 'ъ'=>'\""', 'ы'=>'y','ь' => '\'',  'э'=>'e', 'ю'=>'yu', 'я'=>'ya','А' => 'A', 'Б' => 'B', 'В' => 'V','Г' => 'G', 'Д' => 'D', 'Е' => 'E','Ё' => 'E', 'Ж' => 'Zh','З' => 'Z','И' => 'I', 'Й' => 'Y', 'К' => 'K','Л' => 'L', 'М' => 'M', 'Н' => 'N','О' => 'O', 'П' => 'P', 'Р' => 'R','С' => 'S', 'Т' => 'T', 'У' => 'U','Ф' => 'F', 'Х' => 'H', 'Ц' => 'C','Ч' => 'Ch','Ш' => 'Sh','Щ' => 'Sch','Ь' => '\'','Ы' => 'Y', 'Ъ' => '\'','Э' => 'E', 'Ю' => 'Yu','Я' => 'Ya');
	return strtr($str, $trl);
}
	echo("<br>");
	
//p5
	function oneString($str){
		$str = str_replace(' ', '_', $str);
		return $str;
	}


//p8
	function translUrl($str){
		$trl = array('а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'й'=>'j', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'x', 'ц'=>'c', 'ч'=>'ch', 'ш'=>'sh', 'щ'=>'sch', 'ъ'=>'\""', 'ы'=>'y','ь' => '\'',  'э'=>'e', 'ю'=>'yu', 'я'=>'ya','А' => 'A', 'Б' => 'B', 'В' => 'V','Г' => 'G', 'Д' => 'D', 'Е' => 'E','Ё' => 'E', 'Ж' => 'Zh','З' => 'Z','И' => 'I', 'Й' => 'Y', 'К' => 'K','Л' => 'L', 'М' => 'M', 'Н' => 'N','О' => 'O', 'П' => 'P', 'Р' => 'R','С' => 'S', 'Т' => 'T', 'У' => 'U','Ф' => 'F', 'Х' => 'H', 'Ц' => 'C','Ч' => 'Ch','Ш' => 'Sh','Щ' => 'Sch','Ь' => '\'','Ы' => 'Y', 'Ъ' => '\'','Э' => 'E', 'Ю' => 'Yu','Я' => 'Ya');
		$str = strtr($str, $trl);
		$str = strtolower($str);
		$str = str_replace(' ', '_', $str);
		return $str;
	}
		echo translUrl("Привет букет");

//p7

		$allCity = array(
				"Ленинградская Область" =>array("Бокситогорск","Волосово","Волхов","Всеволожск","Выборг","Высоцк","Гатчина","Ивангород","Каменногорск","Кингисепп","Кириши","Кировск","Коммунар","Лодейное Поле","Луга","Любань","Никольское","Новая Ладога","Отрадное","Пикалево","Подпорожье","Приморск","Приозерск","Светогорск","Сертолово","Сланцы","Сосновый Бор","Сясьстрой","Тихвин","Тосно","Шлиссельбург"),
				"Липецкая Область" => array("Грязи","Данков","Елец","Задонск","Лебедянь","Липецк","Усмань","Чаплыгин"),
				"Московская Область" => array("Апрелевка","Балашиха","Бронницы","Верея","Видное","Волоколамск","Воскресенск","Высоковск","Голицыно","Городской округ Черноголовка","Дедовск","Дзержинский","Дмитров","Долгопрудный","Домодедово","Дрезна","Дубна","Егорьевск","Железнодорожный","Жуковский","Зарайск","Звенигород","Ивантеевка","Истра","Истра-1","Кашира","Кашира-8","Климовск","Клин","Коломна","Королев","Котельники","Красноармейск","Красногорск","Краснозаводск","Краснознаменск","Кубинка","Куровское","Ликино-Дулево","Лобня","Лосино-Петровский","Луховицы","Лыткарино","Люберцы","Можайск","Мытищи","Наро-Фоминск","Ногинск","Одинцово","Ожерелье","Озеры","Орехово-Зуево","Павловский Посад","Пересвет","Подольск","Протвино","Пушкино","Пущино","Раменское","Реутов","Рошаль","Руза","Сергиев Посад","Сергиев Посад-7","Серпухов","Снегири","Солнечногорск","Солнечногорск-2","Солнечногорск-25","Солнечногорск-30","Солнечногорск-7","Старая Купавна","Ступино","Талдом","Фрязино","Химки","Хотьково","Черноголовка","Чехов","Чехов-2","Чехов-3","Чехов-8","Шатура","Щелково","Электрогорск","Электросталь","Электроугли","Юбилейный","Яхрома"),
				"Нижегородская Область" =>array("Арзамас","Балахна","Богородск","Бор","Ветлуга","Володарск","Ворсма","Выкса","Горбатов","Городец","Дзержинск","Заволжье","Княгинино","Кстово","Кулебаки","Лукоянов","Лысково","Навашино","Нижний Новгород","Павлово","Первомайск","Перевоз","Саров","Семенов","Сергач","Урень","Чкаловск","Шахунья")
				);
		foreach($allCity as $state => $city){
			echo ("<h3>$state</h3>");
			foreach ($city as $allCity){
				echo (strstr($allCity, 'К'));
			}
			echo("<br>");
		}


?>