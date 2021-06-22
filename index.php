<?php
//1
echo '</br></br>задание1</br>';
$a=0;
while($a < 100){
    if($a%3==0){
      echo $a . '</br>';
    }
    $a++;
}
//2
echo '</br></br>задание2</br>';
$y=10;
$x=0;
do
{
if ($x==0)
{
echo "$x -  ноль </br>";
$x++;
}
elseif ($x% 2==0)
{
echo "$x-  чётное число </br>";
$x++;
}
else
{
echo "$x-  нечётное число </br>";
$x++;
}

}while ($x<=$y);
//3 + 8
echo '</br></br>задание3 и 8</br>';
  $obl = ['Московская область' => ['Москва', 'Зеленоград', 'Клин'], 'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Кронштадт']];
foreach ($obl as $key => $value) {
echo '</br>' . $key .':</br>';
foreach ($value as $key => $value) {
echo '<br>' . $value . '<br>';
}
 echo '<br> задание 8';
}

foreach ($obl as $key => $value) {
echo '<br>' . $key .':<br>';
foreach ($value as $key => $value) {
if(mb_substr($value, 0, 1) == 'К') {
echo '<br>' . $value .'<br>';
}
}
}
// 4
echo '</br></br>задание4</br>';
   function transLit($text){
$alfavit = array('а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'к'=>'k', 'л'=>'l','м'=>'m', 'н'=>'n','о'=>'o', 'п'=>'p','р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u','ф'=>'f','х'=>'h', 'ц'=>'ts', 'ч'=>'ch', 'ш'=>'sh','щ'=>'tch', 'ъ'=>'"', 'ы'=>'y', 'ь'=>'`', 'э'=>'eh', 'ю'=>'yu', 'я'=>'ya');
$text_a = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);
$text = '';
foreach($text_a as $val) {
    $text .= (isset($alfavit[$val])) ? $alfavit[$val] : $val;
}
echo $text . '</br>';
return $text;
}
$text = "вроде работает! привет?";
transLit($text);

echo '</br></br>задание5</br>';
function change($qu){
$qu=preg_replace('/\s+/', '_', $qu);
echo $qu;
}
change('Катя идет на реку');

echo '</br></br>задание7</br>';
for($i = 0; $i < 11; print $i, $i++){};
echo '</br></br>задание9</br>';
function lost($str){
	$str = transLit($str);
	change($str);
};
lost('енот колол дрова');
?>

<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title></title>
     </head>
     <body>
<?php
$menu = array (
     array ("link"=>"Главная", "href"=>"index.php"),
     array ("link"=>"О нас", "href"=>"about.php"),
     array ("link"=>"Контакты", "href"=>"contact.php")
);
echo '</br></br>задание6</br>';
echo "<ul>";
foreach ($menu as $item){
echo "<li><a href='{$item[href]}'> {$item [link]}</a></li>";
}
?>

     </body>
</html>
