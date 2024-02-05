<?php
//Task 1
$a = 0;
$b = 0;
for( $i=0; $i<=5; $i++ )
{
    $a += 10;
    $b += 5;
    echo $i . ": a=" . $a . " b=" . $b . "<br />";
}
echo "<br />Конец цикла, и значение a = $a , а значение b = $b";

echo "<br /><br /><br />";

//Task 2
$i = 0;
$num = 50;
while( $i < 10)
{
    $num--;
    $i++;
    echo "Шаг i = $i и num = $num <br />";
}
echo ("<br />Цикл завершен на i = $i шаге и num = $num" );

echo "<br /><br /><br />";

//Task 3
$adaos = 7;
$pret = 120;
do{
    $pret=$pret + $adaos;
    $adaos++;
    echo "Промежуточная цена товара будет -- $pret";
}
while( $adaos < 10 );
echo ("<br />Новая цена товара будет -- $pret" );

echo "<br /><br /><br />";


