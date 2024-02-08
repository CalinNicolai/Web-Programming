<?php
$dayOfWeek = date("N");
switch ($dayOfWeek) {
    case 1:
        $dayName = "понедельник";
        break;
    case 2:
        $dayName = "вторник";
        break;
    case 3:
        $dayName = "среда";
        break;
    case 4:
        $dayName = "четверг";
        break;
    case 5:
        $dayName = "пятница";
        break;
    case 6:
        $dayName = "суббота";
        break;
    case 7:
        $dayName = "воскресенье";
        break;
    default:
        $dayName = "неизвестный";
}

// Получаем текущую дату
$date = date("d.m.y");

// Выводим результат на экран
echo "Сегодня, $dayName, $date";
?>
