<?php
// Получаем данные из формы
$A = $_POST['A'];
$B = $_POST['B'];
$N = $_POST['N'];

// Задача 1: Поменять местами содержимое переменных A и B
$temp = $A;
$A = $B;
$B = $temp;

// Задача 2: Найти количество секунд, прошедших с начала последней минуты
$seconds_since_last_minute = $N % 60;

// Выводим результаты
echo "<h2>Результаты:</h2>";
echo "<p>Новые значения:</p>";
echo "<p>A = $A</p>";
echo "<p>B = $B</p>";
echo "<p>Количество секунд, прошедших с начала последней минуты: $seconds_since_last_minute</p>";
?>
