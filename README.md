# Задание по PHP

## Описание
Это задание представляет собой набор задач по языку программирования PHP. В каждой задаче представлены инструкции по выполнению определенных действий с использованием операторов echo, print, переменных, конкатенации строк, а также примеры использования различных видов кавычек.

## Задачи
1. Вывести на экран текст "Период отпусков закончился!" с использованием операторов echo и print.
2. Определить 2 переменные PHP: одна целочисленная со значением 288 и одна строкового типа - "Все возвращаются на работу!".
3. Вывести значения переменных на экран, каждую с новой строки.
4. Вывести строку, состоящую из значения первой переменной в конкатенации со второй, и дополнительного текста, чтобы вывести следующий текст "В 288 день, приблизительно ... Все возвращаются на работу!".
5. Вывести на экран сумму чисел 45+67, используя разные способы и различные виды кавычек.
6. Вывести на экран предложение "Книга “Герой” выйдет в октябре, этого года!" с использованием правильных кавычек.
7. Добавить стих и вывести его на экран.

## Выполнение
Чтобы выполнить задание, создайте файл `index.php` и скопируйте в него содержимое каждой задачи. Затем запустите файл `index.php` в вашем локальном веб-сервере с поддержкой PHP или используйте онлайн-среду разработки PHP.

## Объяснения
1. `print('Период отпусков закончился!');` - выводит сообщение с использованием функции print.
2. `$x = 288;` - создает переменную с целочисленным значением 288.
3. `$y = 'Все возвращаются на работу!';` - создает переменную со строковым значением.
4. `echo "<br />" . $x;` и `echo "<br />" . $y;` - выводит значения переменных `$x` и `$y` с новой строки.
5. `echo "В {$x} день, приблизительно ... {$y} <br />";` - выводит строку, в которой значения переменных подставлены в текст.
6. `echo 45 + 67;` - выводит результат сложения чисел 45 и 67.
7. `echo '45+67';` и `echo "45+67";` - выводит строку '45+67' с использованием разных видов кавычек.
8. `echo 'Книга "Герой" выйдет в октябре, этого года!';` - выводит предложение с использованием правильных кавычек.
9. Вывод стихотворения с использованием тега `<pre>` для сохранения форматирования.
