<?php
//пример с if
$varsta = 22;
if (($varsta > 12) && ($varsta < 20)) {
    $mesaj=" вы подросток!";
} elseif ($varsta > 40) {
    $mesaj=" вы взрослый человек!";
} else {
    $mesaj=" вы в рассвете сил ... приступайте к работе!";
}
//тернарный оператор
$nume = "Аня";

echo ($nume) ? $nume.', '.$mesaj : 'Anonymous, '.$mesaj;
