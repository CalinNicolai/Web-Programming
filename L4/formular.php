<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .stilDiv {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f8f8f8;
        }

        .rezultat {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
        }

        .stilDiv form {
            display: flex;
            flex-direction: column;
        }

        .stilDiv fieldset legend {
            font-weight: bold;
            color: #333;
        }

        .stilDiv form input[type="text"],
        .stilDiv form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .stilDiv form input[type="reset"],
        .stilDiv form input[type="submit"] {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .stilDiv form input[type="reset"]:hover,
        .stilDiv form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

</head>
<body>

<?php
// Проверка, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    ?>
    <div class="rezultat">
        Ваша фамилия: <b><?php echo $_POST['nume']; ?> </b>, а ваше имя:  <b><?php echo $_POST['prenume']; ?> </b><br />
        Ваш е-майл адрес:  <b><?php echo $_POST['email']; ?> </b><br /><br />
        На вопрос "Нравятся ли вам наши товары", вы ответили:  <b><?php echo $_POST['optiune']; ?> </b>, а ваш комментарий:	<br />
        <i><?php echo $_POST['comentariu']; ?></i>
    </div>
    <?php
} else {
    // Если форма не была отправлена, отображаем форму
    ?>
    <div class="stilDiv">
        <form action="formular.php" method="post">
            <fieldset>
                <legend>Ваше мнение очень важное для нас! </legend>
                <p>
                    <label for="nume">Введите фамилию: </label> <input type="text" name="nume" /><br />
                    <label for="prenume">Введите имя: </label><input type="text" name="prenume" /><br />
                    <label for="email">Ваш е-майл: </label> <input type="text" name="email" />
                </p>
                <p>
                    Удовлетворены нашими товарами? <br />
                    <input type="radio" name="optiune" value="Da" checked="checked" />Хорошие <br />
                    <input type="radio" name="optiune" value="Nu" />Нехорошие<br />
                    <input type="radio" name="optiune" value="Nu stiu" /> Не могу высказаться
                </p>
                <p>
                    Оставьте ваше мнение насчет качества услуг предоставленные сотрудниками нашей компании:<br />
                    <textarea name="comentariu" rows="10" cols="30"></textarea>
                </p>
                <p>
                    <input type="reset" value="Удалить">
                    <input type="submit" value="Передать">
                </p>
            </fieldset>
        </form>
    </div>
    <?php
}
?>

</body>

</html>