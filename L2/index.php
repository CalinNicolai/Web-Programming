<?php
//Task nr1
$nume = 'Калин';
$prenume = 'Николай';
echo 'Фамилия клиента ' . $nume . ', а его имя '
    . $prenume . '.';
$varsta = 30;
print '<br />Возраст клиента ' . $varsta . '.';

//Task nr2
$d=date("w");

//Ternary operator
//echo ($d == "Fri") ? "<br />Хороших вам выходных!" : "<br />Приятного рабочего дня,вам!";

if ($d==5)
    echo "<br />Хороших вам выходных!";
elseif ($d = 0)
    echo "<br />Завтра начинается новая рабочая неделя!";
else
    echo "<br />Приятного рабочего дня,вам!";
