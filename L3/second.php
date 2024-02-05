<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>Документ без названия</title>
    <style>
        body{
            text-align: center;
        }
        table{
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php
$noteInfo = array(
    array (1, "Иванов", "Иван", 7),
    array (2, "Ковалев", "Елина", 9),
    array (3, "Аванесов", "Татиана", 8),
    array (4, "Гурэу", "Ана", 10),
    array (5, "Дедин", "Кэтэлин",  9),
    array (6, "Китороагэ", "Вера",  8),
    array (7, "Жосан", "Сергей",  7),
    array (8, "Калин", "Николай",  7),
    array (9, "Негру", "Степан",  8),
);
?>
<table border = "1">
    <tr style = "background-color: green; color: white">
        <th colspan = "4">Оценки учеников 10-го класса, по информатике</th>
    </tr>
    <tr style = "background-color: green; color: white">
        <th>П.н.</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Оценка</th>
    </tr>
    <?php
    for ($linie = 0; $linie < count($noteInfo); $linie++) {
        echo "<tr>";
        for ($coloana = 0; $coloana <= 3; $coloana++) {
            echo "<td>" . $noteInfo[$linie][$coloana] . "</td>";
        }
        echo "</tr>";
    }
    $media = media($noteInfo);
    $Numberbigger8 = countGradebigger8($noteInfo);
    echo "<br />" . "<h1>Средняя оценка студентов $media</h1>";
    echo "<br />" . "<h1>Всего $Numberbigger8 студентов имеют оценку больше 8 </h1>";
    ?>
</table>
</body>
</html>

<?php
function countGradebigger8($array){
    $counter = 0;
    foreach ($array as $student){
        if ($student[3] > 8 ) {
            $counter++;
        }
    }
    return $counter;
}
function media($array){
    $summ = 0;
    foreach ($array as $student){
        $summ += $student[3];
    }
    return round( $summ / count($array), 2);
}
?>