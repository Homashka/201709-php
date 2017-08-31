<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
</head>
<body>
<?php

// ВНИМАНИЕ! Если в файл скопирован текст не в кодировке UTF-8, это вызывает ошибку 'Syntax parse error ...'

/*
// вызов функции

phpinfo();
*/

/////////////////////////////////////////////////

/*
// константы и встроенные константы

echo __FILE__, '<br>';
*/

/////////////////////////////////////////////////

/*
// получение типа данных из переменной

$num1 = 5;
echo gettype($num1), '<br>';

$num2 = 5.5;
echo gettype($num2), '<br>';
*/

/////////////////////////////////////////////////

/*
// постоянное приведение типа

$t = 3.14;
echo "t = $t " . gettype($t) . "<br>";

settype($t,"string");
echo "t = $t " . gettype($t) . "<br>";

settype($t,"integer");
echo "t = $t " . gettype($t) . "<br>";

settype($t,"double");
echo "t = $t " . gettype($t) . "<br>";

settype($t,"boolean");
echo "t = $t " . gettype($t);
*/

/////////////////////////////////////////////////

/*
// временное приведение типа - на момент операции создается копия
// bool, int, double, float, string, array, object

$t = 3.14;

$tmp = (string) $t;
echo "tmp = $tmp " . gettype($tmp) . "<br>";

$tmp = (int) $t;
echo "tmp = $tmp " . gettype($tmp) . "<br>";

$tmp = (double) $t;
echo "tmp = $tmp " . gettype($tmp) . "<br>";

$tmp = (bool) $t;
echo "tmp = $tmp " . gettype($tmp) . "<br>";

echo "t = $t " . gettype($t);
*/

/////////////////////////////////////////////////

/*
// динамические переменные

$t = "Всем"; // переменной t присваиваем значение "Всем"
$$t = "привет!"; // Переменной "Всем" присваиваем значение "привет!"

echo "$$t " . $$t . "<br>";
echo "$t ${$t}<br>";
echo "$t $Всем";
*/

/////////////////////////////////////////////////

/*
// передача ячейки памяти по ссылке

$t1 = 96;
$t2 = &$t1;

echo $t1 , '<br>' , $t2 , '<br>';
echo "t1 = $t1; t2 = $t2<br>";

$t1 = 315;
echo "t1 = $t1; t2 = $t2";
*/

/////////////////////////////////////////////////

/*
// проверка содержимого и типа переменной

isset($varName); // Истина, если переменная объявлена даже без присваивания значения.

empty($varName); // Истина, если значение переменной равно нулю или пустой строке, либо переменная не объявлена.

is_int($number); // Результатом выполнения этой функции является TRUE, если переменная $number имеет тип integer.

is_float($number); // проверяет, является ли переменная $number числом с плавающей точкой.

is_array ($varArr); // проверяет, является ли переменная $varArr массивом.

is_null($varl); // проверяет, равно ли значение переменной $varl нулю

is_numeric($string); // проверяет, является ли переменная $string числовой строкой.

is_string($string); // проверяет, является ли переменная $string строкой
*/

/////////////////////////////////////////////////

// УСЛОВНЫЕ ОПЕРАТОРЫ if, elseif, else

/////////////////////////////////////////////////

/*
// if
if ($a > $b) {
  echo "А больше Б";
}

// Альтернативный синтаксис if
if ($a > $b):
  echo "А больше Б";
endif;

// if else
if ($a > $b) {
  echo "А больше Б";
} else {
  echo "А не больше Б";
}

// Альтернативный синтаксис if else
if ($a > $b):
  echo "А больше Б";
else:
  echo "А не больше Б";
endif;

// if elseif else
if ($a > $b) {
  echo "А больше Б";
} elseif ($a == $b) {
  echo "А равно Б";
} else {
  echo "А меньше Б";
}

// Альтернативный синтаксис if elseif else
if ($a > $b):
  echo "А больше Б";
elseif ($a == $b):
  echo "А равно Б";
else:
  echo "А меньше Б";
endif;
*/

/////////////////////////////////////////////////

// УСЛОВНЫЙ ТРЕНАРНЫЙ ОПЕРАТОР

/////////////////////////////////////////////////

/*
$text = ($a == $b) ? "А равно Б" : "А не равно Б";

echo $text;
*/

/////////////////////////////////////////////////

// УСЛОВНЫЙ ОПЕРАТОР switch

/////////////////////////////////////////////////

/*
// switch
switch ($a) {
  case 1:
    echo "А равно 1";
    break;
  case 2:
    echo "А равно 2";
    break;
  case 3:
    echo "А равно 3";
    break;
  default:
    echo "А не равно ни 1, ни 2, ни 3";
}

// Альтернативный синтаксис switch
switch ( $a ):
  case 1:
    echo "А равно 1";
    break;
  case 2:
    echo "А равно 2";
    break;
  case 3:
    echo "А равно 3";
    break;
  default:
    echo "А не равно ни 1, ни 2, ни 3";
endswitch;
*/

/////////////////////////////////////////////////

// ЦИКЛЫ for, while, do while

/*
В организации цикла могут участвовать еще два оператора:
break - выход из цикла
continue - переход на следующий шаг
*/

/////////////////////////////////////////////////

/*
// for
for ($a = 11; $a <= 19; $a++) {
  echo "квадрат $a равен " . ($a * $a) . "<br>";
}

// Альтернативный синтаксис for
for ($a = 11; $a <= 19; $a++):
  echo "квадрат $a равен " . ($a * $a) . "<br>";
endfor;

// while
$a = 11;
while ($a <= 19) {
  echo "квадрат $a равен " . ($a * $a) . "<br>";
  $a++;
}

// Альтернативный синтаксис while
while ($a <= 19):
  echo "квадрат $a равен " . ($a * $a) . "<br>";
  $a++;
endwhile;

// do while
$a = 11;
do {
  echo "квадрат $a равен " . ($a * $a) . "<br>";
  $a++;
} while ($a <= 19);
*/

/////////////////////////////////////////////////

// МАССИВЫ

/////////////////////////////////////////////////

/*
// создание массива с помощью функции array();

$growth = array(174, 181, 166); // Массив с индексацией, начинающейся с нуля

$price = array("tomato" => 15, "cucumber" => 12); // Ассоциативный массив

$data = array(
  "Ivanov" => array("growth" => 174, "weight" => 68),
  "Petrov" => array("growth" => 181, "weight" => 90),
  "Sidorov" => array("growth" => 166, "weight" => 73)
); // Двухмерный массив
*/

/////////////////////////////////////////////////

/*
// создание массива с помощью литерала
$arrEmpty = []; // пустой массив
$arrNums = [0, 1, 2]; // массив integer
$arrStrs = ['zero', 'one', 'two']; // массив string
$arrArrs = [[1,2,3], [4,5,6], [7,8,9]]; // массив массивов, многомерный массив (в данном случает двумерный - уровень вложенности 2)

// добавление значений в индексированный массив (если индекс не указывать, он высчитывается последовательно начиная с 0)
$fruit[] = "apple";
$fruit[] = "pear";
$fruit[] = "plum";

// можно указать индексы, но тогда будут неинициализированные пропуски
// таким образом рекомендуется только переназначать значение индексированного массива
$fruit[0] = "melon";
$fruit[2] = "watermelon";

// добавление значений в ассоциативный массив
$price["tomato"] = 15;
$price["cucumber"] = 12;
*/

/////////////////////////////////////////////////

/*
// комбинация 2х способов

$fruit = array("apple", "pear", "plum");
$fruit[] = "peach";
*/

/////////////////////////////////////////////////

/*
// Количество элементов в массиве можно определить с помощью функций count(); или sizeof();

$fruit = array("apple", "pear", "plum", "peach");

echo "Размер массива \$fruit равен " . count($fruit) . "<br>";
// Размер массива $fruit равен 4
echo "Последний элемент массива \$fruit " . $fruit[ count($fruit) - 1 ] . "<br>";
// Последний элемент массива $fruit peach
*/

/////////////////////////////////////////////////

/*
// Частоту вхождения элементов в массив можно определить с помощью функции array_count_values();
// Функция print_r(); отображает ключи и значения массива, указанного в аргументе

$fruit = array("apple", "pear", "plum", "peach", "pear");
print_r( array_count_values($fruit) );
// Array ( [apple] => 1 [pear] => 2 [plum] => 1 [peach] => 1 )
*/

/////////////////////////////////////////////////

/*
// Для итерационного просмотра содержимого массива служит функция foreach();

$fruit = array("apple", "pear", "plum", "peach", "pear");
// просмотр индексного массива
foreach($fruit as $one) {
  echo "$one<br>";
}

$price = array("tomato" => 15, "cucumber" => 12);
// просмотр ассоциативного массива
foreach($price as $vegetable => $money) {
  echo "$vegetable стоят $money грн.<br>";
}
*/

// еще о foreach и ссылочных переменных

/*
$arrNums = [10, 11, 12];

// чтобы просто вернуть значение ячейки - переменная $key не обязательна
foreach ($arrNums as $value) {
  echo "<p>$value</p>";
}

// если же мы хотим вернуть имя ключа - переменная $key обязательна (здесь $key и $value - 2 независимые переменные)
foreach ($arrNums as $key => $value) {
  echo "<p>source: $arrNums, key: $key, value: $value</p>";
}

// чтобы значение ячейки перезаписать, нам нужно знать имя ключа - переменная $key обязательна (здесь $key и $value - 2 независимые переменные)
foreach ($arrNums as $key => $value) {
  $arrNums[$key] = pow($value, 2);
}

// &$value - & перед именем переменной создает передачу значения в нее по ссылке ($value становится ссылочной переменной, которая ссылается на родительскую ячейку памяти переменной $key)
foreach ($arrNums as $key => &$value) {
  // &$value -> $arrNums[$key]
  $value = pow($value, 2);
}

// &$value в таком виде становится связанной с ключем (с родительской ячейкой памяти) поэтому меняя значение переменной $value, мы меняем значение родительской ячейки памяти
foreach ($arrNums as &$value) {
  $value = pow($value, 2);
}

// пример:
$a = 5;
$b = &$a; // теперь обе переменные - ссылочные т.к. они ссылаются на одну область памяти, изменение значения в одной переменной меняет значение в другой
var_dump($b); // $b === 5
$b = 25;
var_dump($a); // $a === 5 -> $a === 25
$a = null;
var_dump($b); // $b === 25 -> $b === null , как их теперь отвязать друг от друга я не знаю :)))
*/

/////////////////////////////////////////////////

/*
// print_r(); - Вывод всех эллементов массива

$a = array('a' => 'apple', 'b' => 'banana', 'c' => array('x', 'y', 'z'));
print_r($a);
// Array ( [a] => apple [b] => banana [c] => Array ( [0] => x [1] => y [2] => z ) )
*/

/////////////////////////////////////////////////

// УПРАВЛЕНИЕ МАССИВАМИ (операции с массивами)

/////////////////////////////////////////////////

/*
// array_merge(); - объединение (слияние) массивов.
// Последующее значение элемента перекрывает предыдущее, если ключи строковые и одинаковые.

$opinion1 = array(1, "Катя" => "умная", 2, "Женя" => "красивая", 3);
$opinion2 = array(4, "Женя" => "глупая", 5, "Катя" => "милая");

echo '<p>1 + 2:</p>';
print_r( array_merge($opinion1, $opinion2) );

echo '<p>2 + 1:</p>';
print_r( array_merge($opinion2, $opinion1) );
*/

/////////////////////////////////////////////////

/*
// array_shift(); - удаление первого элемента.

$fruit = array("яблоко", "груша", "слива", "персик");

echo "В вазе лежали:";

foreach ($fruit as $tmp) {
  echo " $tmp";
}

echo "<br>Первым съели " . array_shift($fruit) . "<br>";

echo "В вазе остались:";

foreach ($fruit as $tmp) {
  echo " $tmp";
}
*/

/////////////////////////////////////////////////

/*
// array_pop(); - удаление последнего элемента.

$fruit = array("яблоко", "груша", "слива", "персик");

echo "В вазе лежали:";

foreach ($fruit as $tmp) {
  echo " $tmp";
}

echo "<br>Первым съели " . array_pop($fruit) . "<br>";

echo "В вазе остались:";

foreach ($fruit as $tmp) {
  echo " $tmp";
}
*/

/////////////////////////////////////////////////

/*
// array_push(); - добавление элементов в конец массива.
// Если в качестве второго аргумента функции array_push(); передать массив, то этот массив будет добавлен как элемент, т.е. будет создан двумерный массив.

$a = array(1, 2, 3);

echo "Массив \$a:";

foreach($a as $tmp) echo " $tmp";

$k = array_push($a, 4, 5);

echo "<br>Массив \$a после добавления:";

foreach($a as $tmp) echo " $tmp";

echo "<br>Его длина = $k";
*/

/////////////////////////////////////////////////

/*
// array_unshift(); добавление элементов в начало массива.

$a = array(1, 2, 3);

echo "Массив \$a:";

foreach($a as $tmp) echo " $tmp";

$k = array_unshift($a, 4, 5);

echo "<br>Массив \$a после добавления:";

foreach($a as $tmp) echo " $tmp";

echo "<br>Его длина = $k";
*/

/////////////////////////////////////////////////

/*
array_slice(); - выделение фрагмента массива.

Имеет три параметра:
1) сам массив,
2) смещение,
3) длину выделяемого фрагмента.

При положительном смещении отсчет выполняется от начала массива, 
при отрицательном - от конца.

При положительной длине результирующий фрагмент будет содержать заданное число элементов.
При отрицательной длине последним элементом фрагмента станет тот, 
который находится на указанном расстоянии от конца массива.

Если 3й параметр опущен, то фрагмент будет содержать все элементы от
начального смещения и до конца массива.
*/

/*
$a = array("a", "b", "c", "d", "e", "f");

echo "\$a:";
foreach ($a as $t) echo " $t";

$b = array_slice($a, 2);
echo "<br>array_slice(\$a, 2):";
foreach ($b as $t) echo " $t";

$b = array_slice($a, 2, -1);
echo "<br>array_slice(\$a, 2, -1):";
foreach ($b as $t) echo " $t";

$b = array_slice($a, -2, 1);
echo "<br>array_slice(\$a, -2, 1):";
foreach ($b as $t) echo " $t";

$b = array_slice($a, 0, 3);
echo "<br>array_slice(\$a, 0, 3):";
foreach ($b as $t) echo " $t";
*/

/////////////////////////////////////////////////

// СОРТИРОВКИ МАССИВОВ

/////////////////////////////////////////////////

/*
Сортировать можно как простые, так и ассоциативные массивы.
Для сортировки массивов в PHP существуют определенные функции:

sort(); - сортирует массив  по значениям:
- в алфавитном порядке, если хотя бы один из его элементов является строкой, 
- в числовом порядке, если все его элементы числа.

rsort(); - реверсивный sort();

asort(); - сортирует ассоциативный массив по значениям; 
работает как sort(); , но сохраняет имена элементов.

arsort(); - реверсивный asort();

ksort(); - сортирует ассоциативный массив по ключам.

krsort(); - реверсивный ksort();
*/

/*
$a = array("первый" => 6, "второй" => 2, "третий" => 1);

echo "\$a:<br>";
foreach ($a as $k => $t) echo " $k = $t<br>";

asort ($a);
echo "asort (\$a):<br>";
foreach ($a as $k => $t) echo " $k = $t<br>";

ksort ($a);
echo "ksort (\$a):<br>";
foreach ($a as $k => $t) echo "$k = $t<br>";
*/

/////////////////////////////////////////////////

// ПОИСК ЭЛЕМЕНТА В МАССИВЕ

/////////////////////////////////////////////////

/*
in_array(); - если элемент/значение найдено, возвращает true, иначе false.

array_search(); - если элемент/значение найдено, возвращает его ключ, иначе false.

isset(); - возвращает true, если значение по запрашиваемому ключу не null.
*/

$arr = array('first' => 6, 'second' => 2, 'third' => 30);

if ( in_array(2, $arr) ) echo '<p>такое значение (2) в массиве найдено -> true: ' . in_array(2, $arr) . '</p>';

if ( array_search(2, $arr) ) echo '<p>такое значение (2) в массиве найдено -> key: ' . array_search(2, $arr) . '</p>';

if ( isset($arr['second']) ) echo '<p>значение по такому ключу (second) !== null (определено) -> true: ' . isset($arr['second']) . '</p>';

echo '<p>значение по такому ключу (second) -> value: ' . $arr['second'] . '</p>';

?>
</body>
</html>