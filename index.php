<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №9 - Ворошнина София Павловна - Группа 231-362</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marmelad&family=Yanone+Kaffeesatz:wght@200..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="main.css">

</head>

<body>
    <header>
        <img src="polytech_logo_main_black.png" alt="Логотип университета">
        <h1>Лабораторная работа №9</h1>
        <p>Ворошнина София Павловна, группа 231-362</p>
        <p>Вариант 1</p>
    </header>
    <main>
        <?php
        // Переменные для функции
        $x_start = 5; // начальное значение
        $step = 1; // шаг изменения аргумента
        $x_max = 100; // максимальное значение аргумента
        $min_value = PHP_INT_MAX;
        $max_value = PHP_INT_MIN;
        $sum = 0;
        $count = 0;


        // Тип верстки
        $layout_type = 'C'; // Может быть A, B, C, D, E
        



        // Функция для вычисления значений
        function calculate_function($x)
        {
            if ($x <= 10) {
                return 10 * $x - 5;
            } elseif ($x > 10 && $x < 20) {
                return ($x + 3) * $x * $x;
            } elseif ($x >= 20) {

                if ($x == 25) { //деление на ноль
        

                    return 0;
                } else {
                    return 3 / ($x - 25);
                }
            } else {
                return null;  // Если x не попадает ни в одно из условий
            }

        }



        // Вывод по типу верстки
        switch ($layout_type) {
            case 'A':
                for ($x = $x_start; $x <= $x_max; $x += $step) {
                    $y = calculate_function($x);

                    if ($x != 25) {
                        echo "f($x)=" . round($y, 3) . "<br>";
                        $min_value = min($min_value, $y);
                        $max_value = max($max_value, $y);
                        $sum += $y;
                        $count++;
                    } else {
                        echo "f($x)= error <br>";

                    }

                }
                break;
            case 'B':
                echo "<ul>";
                for ($x = $x_start; $x <= $x_max; $x += $step) {
                    $y = calculate_function($x);
                    if ($x != 25) {
                        echo "<li> f($x)=" . round($y, 3) . "</li><br>";                        $min_value = min($min_value, $y);
                        $max_value = max($max_value, $y);
                        $sum += $y;
                        $count++;
                    } else {
                        echo "<li> f($x)= error <br></li>";

                    }

                }
                echo "</ul>";
                break;
            case 'C':
                echo "<ol>";
                for ($x = $x_start; $x <= $x_max; $x += $step) {

                    $y = calculate_function($x);
                    if ($x != 25) {
                        echo "<li> f($x)=" . round($y, 3) . "</li><br>";
                        $min_value = min($min_value, $y);
                        $max_value = max($max_value, $y);
                        $sum += $y;
                        $count++;
                    } else {
                        echo "<li> f($x)= error <br></li>";

                    }

                }
                echo "</ol>";
                break;
            case 'D':
                echo "<table border='1'><tr><th>#</th><th>Аргумент</th><th>Значение</th></tr>";
                $row = 1;
                for ($x = $x_start; $x <= $x_max; $x += $step) {
                    $y = calculate_function($x);

                    if ($x != 25) {
                        echo "f($x)=" . round($y, 3) . "<br>";
                        $min_value = min($min_value, $y);
                        $max_value = max($max_value, $y);
                        $sum += $y;
                        $count++;
                        $row++;
                    } else {
                        echo "f($x)= error <br>";

                    }

                }
                echo "</table>";
                break;
            case 'E':
                for ($x = $x_start; $x <= $x_max; $x += $step) {
                    $y = calculate_function($x);

                    if ($x != 25) {
                        echo "f($x)=" . round($y, 3) . "<br>";
                        $min_value = min($min_value, $y);
                        $max_value = max($max_value, $y);
                        $sum += $y;
                        $count++;
                    } else {
                        echo "f($x)= error <br>";

                    }

                }
                break;
        }

        // Вычисление дополнительных параметров
        $average = $count > 0 ? $sum / $count : 0;
        echo "<p>Минимум: " . round($min_value, 3) . "</p>";
        echo "<p>Максимум: " . round($max_value, 3) . "</p>";
        echo "<p>Сумма: " . round($sum, 3) . "</p>";
        echo "<p>Среднее: " . round($average, 3) . "</p>";
        ?>
    </main>
    <footer>
        <?php
        switch ($layout_type) {
            case 'A':
                echo "<p>Тип верстки: Простая верстка текстом, без таблиц и блоков</p>";
                break;
            case 'B':
                echo "<p>Тип верстки: Маркированный список</p>";
                break;
            case 'C':
                echo "<p>Тип верстки: Нумерованный список</p>";
                break;
            case 'D':
                echo "<p>Тип верстки: Табличная верстка</p>";
                break;
            case 'E':
                echo "<p>Тип верстки: Блочная верстка</p>";
                break;
        }
        ?>

    </footer>
</body>

</html>