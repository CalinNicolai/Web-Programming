
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>График работы докторов, каб. 333</title>
    <style>
        h2 {
            text-align: center;
            margin-bottom: 20vh;
        }
        table {
            border-collapse: collapse;
            width: 100vh;
            margin: 0 auto
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>График работы докторов, каб. 333</h2>

<table>
    <tr>
        <th>П.н.</th>
        <th>Фамилия, имя</th>
        <th>График</th>
    </tr>

    <?php

    for ($i = 1; $i <= 2; $i++) {
        echo "<tr>";
        echo "<td>$i</td>";

        // Имя доктора (замените на реальные фамилии и имена)
        $doctorName = ($i == 1) ? "Аксенти Елена" : "Петрова Мария";
        echo "<td>$doctorName</td>";

        // График работы в зависимости от дня недели
        $currentDay = date('N');  // Получаем текущий день недели (1 - понедельник, 2 - вторник и так далее)

        if ($currentDay == 1 || $currentDay == 3 || $currentDay == 5) {
            // Понедельник, среда, пятница
            echo "<td>8:00-12:00</td>";
        } elseif ($currentDay == 2 || $currentDay == 4 || $currentDay == 6) {
            // Вторник, четверг, суббота
            echo "<td>12:00-16:00</td>";
        } else {
            // Воскресенье
            echo "<td>Нерабочий день</td>";
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>