<?php
//1
//какие то поблемы с git не могу пока сообразить пинет изменений нет - очень странно!
echo '</br></br>задание1</br>';
function par($a, $b){
    if($a >= 0 && $b >= 0){
       return $a - $b;
    }
    else if($a < 0 && $b < 0){
       return $a * $b;
    }
    else
    {
       return $a + $b;
    }
}
$m = par(-2, -3);
echo $m;
//2
echo '</br></br>задание2</br>';
$a = rand(0, 15);
switch($a) {
    case 0:
     echo 0 . '</br>';
    case 1:
     echo 1 . '</br>';
    case 2:
     echo 2 . '</br>';
    case 3:
     echo 3 . '</br>';
    case 4:
     echo 4 . '</br>';
    case 5:
     echo 5 . '</br>';
    case 6:
     echo 6 . '</br>';
    case 7:
     echo 7 . '</br>';
    case 8:
     echo 8 . '</br>';
    case 9:
     echo 9 . '</br>';
    case 10:
     echo 10 . '</br>';
    case 11:
     echo 11 . '</br>';
    case 12:
     echo 12 . '</br>';
    case 13:
     echo 13 . '</br>';
    case 14:
     echo 14 . '</br>';
    case 15:
     echo 15 . '</br>';

}
//3 + 4
echo '</br></br>задание3 + 4</br>';
function sum($a, $b){
    return $a + $b;
}
function sub($a, $b){
    return $a - $b;
}
function mult($a, $b){
    return $a * $b;
}
function div($a, $b){
    return $a / $b;
}

function arithmetic($arg1, $arg2, $operation){
    switch ($operation){
        case 'сложение': return sum($arg1, $arg2);break;
        case 'вычитание': return sub($arg1, $arg2);break;
        case 'умножение': return mult($arg1, $arg2);break;
        case 'деление': return div($arg1, $arg2);break;
    }

}
$d = arithmetic(6, 5, 'сложение');
echo $d;
// 5
echo '</br></br>задание5</br>';
$data = date("d-m-Y");
echo '</br></br>задание6</br>';

function power($val, $pow)
	{
		if ($val == 0)
		return 0;
		elseif ($pow == 0)
		return 1;
		elseif ($pow < 0)
		return power(1/$val, -$pow);
		else
		return $val *  power($val, $pow-1);
	}
	echo power(3, 3);

echo '</br></br>задание7</br>';
function oue(){
$h = date("H")-1;
$m = date("i");
if ($h==1 || $h==21) {
$hours = " час";}
elseif (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
$hours = " часа";}
else {$hours = " часов";}
if (($m<20) || ($m>10))
{$minutes = " минут.";}
elseif (($m % 10) === 1) {
$minutes = " минута.";}
elseif ((($m % 10)>=2) && (($m % 10)<=4)) {
$minutes = " минуты.";}
else {
$minutes = " минут.";}
echo $h . $hours . " " . $m . $minutes;
}
oue();
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>
      lesson2
</title>
lesson
</head>
<body>
    <footer>
 <h1>
     <?php
      echo 'к заданию 5  -      ' . $data;

      ?>
 </h1>
    </footer>
</body>
</html>
