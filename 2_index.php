<b>Работа с массивами:</b>
<p>Создайте массив $arr=['a', 'b', 'c']. Выведите значение массива на экран с помощью функции var_dump().</p>
<?php
    $arr = ['a', 'b', 'c'];
    var_dump($arr);
?>
<p></p><br>
<p>С помощью массива $arr из предыдущего номера выведите на экран содержимое первого, второго и третьего элементов.</p>
<?php
    $arr = ['a', 'b', 'c'];
    echo $arr[0].$arr[1].$arr[2];
?>
<p></p><br>
<p>Создайте массив $arr=['a', 'b', 'c', 'd'] и с его помощью выведите на экран строку 'a+b, c+d'.</p>
<?php
    $arr = ['a', 'b', 'c', 'd'];
    echo $arr[0].'+'.$arr[1].','.$arr[2].'+'.$arr[3];
?>
<br>
<?php
    $arr = ['a', 'b', 'c', 'd'];
    echo "$arr[0]+$arr[1],$arr[2]+$arr[3]";
?>
<p></p><br>
<p>Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент массива на второй, а третий элемент на четвертый. Результаты сложите, присвойте переменной $result. Выведите на экран значение этой переменной.
</p>
<?php
    $arr = [2, 5, 3, 9];
    $a = $arr[0]*$arr[1];
    $b = $arr[2]*$arr[3];
    $result = $a + $b;
    echo $result;
?>
<p></p><br>
<p>Заполните массив $arr числами от 1 до 5. Не объявляйте массив, а просто заполните его присваиванием $arr[] = новое значение.</p>
<?php
    $arr[0] = 1;
    $arr[1] = 2;
    $arr[2] = 3;
    $arr[3] = 4;
    $arr[4] = 5;
    var_dump($arr);
?>
<p></p><br>
<b>Ассоциативные массивы</b>
<p>Создайте массив $arr. Выведите на экран элемент с ключом 'c'. $arr = ['a'=>1, 'b'=>2, 'c'=>3];</p>
<?php
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    echo $arr['c'];
?>

<p>Создайте массив $arr. Найдите сумму элементов этого массива. $arr = ['a'=>1, 'b'=>2, 'c'=>3];</p>
<?php
    $arr = ['a'=>1, 'b'=>2,'c'=>3];
    $a = $arr['a'];
    $b = $arr['b'];
    $c = $arr['c'];
   echo $result = $a+$b+$c;
?>
<br>
<?php
    $arr = ['a'=>1, 'b'=>2,'c'=>3];
    echo $arr['a']+$arr['b']+$arr['c'];
?>
<p></p><br>
<p>Создайте массив заработных плат $arr. Выведите на экран зарплату Пети и Коли.
    $arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];</p>
<?php
    $arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
    echo 'Петя = '.$arr['Петя'],'<br>',
         'Коля = '.$arr['Коля'];
?>
<p></p><br>
<p>Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.).
Выведите на экран текущий день недели.</p>
<?php
    $arr = [1=>'пн','вт','ср','чт','пт','сб','вс'];
    echo $arr[5];
?>
<p>Пусть теперь номер дня недели хранится в переменной $day, например там лежит число 3. Выведите день недели, соответствующий значению переменной $day.
</p>
<?php
    $arr = [1=>'пн','вт','ср','чт','пт','сб','вс'];
    $day = 3;
    echo $arr[$day];
?>
<p></p><br>
<b>Многомерные массивы</b>
<p>Создайте многомерный массив $arr. С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный'.</p>
<p>$arr = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
    ];</p>
<?php
    $arr = [
        'cms'=>['joomla', 'wordpress', 'drupal'],
        'color'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
    ];
    echo $arr['cms'][0],', '.$arr['cms'][2],', '.$arr['color']['green'],', '.$arr['color']['red'];
?>
<p></p><br>
<p>Создайте двухмерный массив. Первые два ключа - это 'ru' и 'en'. Пусть первый ключ содержит элемент, являющийся массивом названий дней недели по-русски, а второй - по-английски. Выведите с помощью этого массива понедельник по-русски и среду по английски (пусть понедельник - это первый день).
</p>
<?php
    $arr = [
        'ru'=>[1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
        'en'=>[1=>'mo', 'tu', 'we', 'th', 'fr', 'sa', 'su']
    ];
    echo  $arr['ru'][1],'<br>',
          $arr['en'][3];
?>
<p>Пусть теперь в переменной $lang хранится язык (она принимает одно из значений или 'ru', или 'en' - либо то, либо то), а в переменной $day - номер дня. Выведите словом день недели, соответствующий переменным $lang и $day. То есть: если, к примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'.
</p>
<?php
    $arr = [
        'ru'=>[1=>'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
        'en'=>[1=>'mo', 'tu', 'we', 'th', 'fr', 'sa', 'su']
    ];
    $lang = 'ru';
    $day = 7;
    echo  $arr[$lang][$day];
?>