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
        $layout_type = 'E'; // Может быть A, B, C, D, E
        
        // Функция для вычисления значений
        function calculate_function($x)
        {
            if ($x <= 10) {
                return 10 * $x - 5;
            } elseif ($x > 10 && $x < 20) {
                return ($x + 3) * $x * $x;
            } elseif ($x >= 20) {

                if ($x == 25) { //деление на ноль
                    $count = -1;
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

                    echo "f($x)=" . round($y, 3) . "<br>";

                    $min_value = min($min_value, $y);
                    $max_value = max($max_value, $y);
                    $sum += $y;
                    $count++;
                }
                break;
            case 'B':
                echo "<ul>";
                for ($x = $x_start; $x <= $x_max; $x += $step) {
                    $y = calculate_function($x);

                    echo "<li>f($x)=" . round($y, 3) . "</li>";

                    $min_value = min($min_value, $y);
                    $max_value = max($max_value, $y);
                    $sum += $y;
                    $count++;
                }
                echo "</ul>";
                break;
            case 'C':
                echo "<ol>";
                for ($x = $x_start; $x <= $x_max; $x += $step) {

                    $y = calculate_function($x);

                    echo "<li>f($x)=" . round($y, 3) . "</li>";
                    $min_value = min($min_value, $y);
                    $max_value = max($max_value, $y);
                    $sum += $y;
                    $count++;
                }
                echo "</ol>";
                break;
            case 'D':
                echo "<table border='1'><tr><th>#</th><th>Аргумент</th><th>Значение</th></tr>";
                $row = 1;
                for ($x = $x_start; $x <= $x_max; $x += $step) {
                    $y = calculate_function($x);

                    echo "<tr><td>$row</td><td>$x</td><td>" . round($y, 3) . "</td></tr>";

                    $min_value = min($min_value, $y);
                    $max_value = max($max_value, $y);
                    $sum += $y;
                    $count++;
                    $row++;
                }
                echo "</table>";
                break;
            case 'E':
                for ($x = $x_start; $x <= $x_max; $x += $step) {
                    $y = calculate_function($x);

                    echo "<div style='display:inline-block; border: 2px solid red; margin: 8px;'>f($x)=" . round($y, 3) . "</div>";

                    $min_value = min($min_value, $y);
                    $max_value = max($max_value, $y);
                    $sum += $y;
                    $count++;
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
        <p>Тип верстки: <?php echo $layout_type; ?></p>
    </footer>
</body>

</html>