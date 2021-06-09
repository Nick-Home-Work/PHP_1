<?php
//вывод сообщения
/*echo 'Hello home work <br/>';

//переменные
$name = "Nick";
echo "Hello, $name!<br/>";

//константы
define('MY_CONST', 'j do it');
echo MY_CONST;

//типы данных
//int
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";

//плавающ точка
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3 <br>";

//строки
$str = 1;
echo "$str <br>";
echo '$str <br>';
//обьединение
$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c;
//математика
$a = 4;
$b = 5;
echo $a + $b . '<br>'; // сложение
echo $a * $b . '<br>'; // умножение
echo $a -$b . '<br>'; // вычитание
echo $a / $b . '<br>'; // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>' . '<br>' . '<br>'; // возведение в степень*/
$d = 'Задание 3';
echo $d . '<br>' ;

$a = 5;
$b = '05';
var_dump($a == $b); // Почему true?
echo '<br>1 == не жестеое равенство - строка приведена к числу - Сравнение по значению <br>';
var_dump((int)'012345'); // Почему 12345?
echo '<br>2 ни одно число не начинается с нуля  <br>';
var_dump((float)123.0 === (int)123.0); // Почему false?
echo '<br>3 разные типы === - жесткое равенство  <br>';
var_dump((int)0 === (int)'hello, world'); // Почему true?
echo '<br>4  так 0 === 0 <br>';

$g = '<br><br>Задание 4<br><br>';
echo $g . '<br>' ;

$title = 'Какой то текст';
$data = date("d-m-Y");

$g = '<br><br>Задание 5<br><br>';
echo $g . '<br>' ;

$one = 5;
$two = 7;
echo $one . '= $one<br>';
echo $two . '= $two<br>';
$one = $one + $two;
$two = $one - $two;
$one = $one - $two;
echo '<br><br> Теперь немного математики и... <br><br>';
echo $one . '= $one<br>';
echo $two . '= $two<br>';
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>
      <?php
       echo $title;
      ?>
</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
 <h1>
     <?php
       echo $data;
      ?>
 </h1>
</body>
</html>
