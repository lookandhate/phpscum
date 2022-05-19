<?php
    header("Content-Type: text/html; charset=utf-8");
    function validation($matrix) {
        /**
        * Проверка на количество введённых символов (Так как матрица квадратичная,
        * то количество столбцов не должно быть больше количества строк)
        */
        for ($i = 0; $i < count($matrix); $i++) {
            if (count($matrix[$i]) > count($matrix)) {
                return 1;
            }
        }
        /**
        * Проверка на наличие петель в графе (На главной диагонали матрицы должны быть нули)
        */
        for ($i = 0; $i < count($matrix); $i++) {
            if ($matrix[$i][$i] != 0) {
                return 2;
            }
        }
        /**
        * Проверка на наличие каких-либо символов кроме чисел и на отрицательное
        * значение элементов массива
        * "is_numeric" проверяет, является ли переменная числом или строкой,
        * содержащей число.
        */
        for ($i = 0; $i < count($matrix); $i++) {
            for ($j = 0; $j < count($matrix[$i]); $j++) {
                if (!is_numeric($matrix[$i][$j]) && $matrix[$i][$j] != p) {
                    return 3;
                }
            }
        }
        return 0;
    }
    /**
    * Реализация алгоритма Флойда-Уоршелла.
    * Метод "array_fill" заполняет массив значениями
    * Метод "intval" возвращает целое значение переменной
    */
    function floydWarshal($matrica) {
        $roads = array();
        /**
        * Происходит заполнение нового массива "roads" нулями, опираясь на размер
        * первоначальной матрицы. Элементы на главной диагонали становятся равны 1.
        */
        for ($i = 0; $i < count($matrica); $i++) {
            $roads[$i] = array_fill(0, count($matrica), 0);
            for ($j = 0; $j < count($matrica); $j++) {
                if (intval($matrica[$i][$j]) != 0 || $i == $j) {
                    $roads[$i][$j] = 1;
                }
            }
        }
        for ($k = 0; $k < count($matrica); $k++) {
            for ($i = 0; $i < count($matrica); $i++) {
                for ($j = 0; $j < count($matrica); $j++) {
                    if ($roads[$i][$j] || ($roads[$i][$k] && $roads[$k][$j])) {
                        $roads[$i][$j] = 1;
                    }
                }
            }
        }
        return $roads;
    }
    /**
    * В этой функции просходит отрисовка введённого нами двумерного массива в матрицу
    */
    function printMatrix($matrica) {
        for ($i = 0; $i < count($matrica); $i++) {
            for ($j = 0; $j < count($matrica[$i]); $j++) {
                $matrica[$i][$j] = strval($matrica[$i][$j]);
                echo $matrica[$i][$j];
            }
            echo "<br>";
        }
    }
    /**
    * Здесь мы берем значения, введенные пользователем, и создаём по ним двумерный масссив
    * с которым будет удобно работать. После чего производим валидацию и вызов всех функций.
    *
    * Метод "explode" разбивает строку с помощью разделителя
    * Метод "strval" возвращает строковое значение переменной
    * Метод "array_filter" фильтрует элементы массива с помощью callback-функции
    * Метод "array_values" выыбирает все значения массива
    * Метод "trim" удаляет пробелы (или другие символы) из начала и конца строки
    */
    $matrix = strval($_POST['matrica']);
    $matrix = explode("\n", $matrix);
    $matrix = array_filter($matrix, 'strlen');
    for ($i = 0; $i < count($matrix); $i++) {
        $matrix[$i] = explode(" ", $matrix[$i]);
        $matrix[$i] = array_filter($matrix[$i], 'strlen');
        $matrix[$i] = array_values($matrix[$i]);
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            $matrix[$i][$j] = trim($matrix[$i][$j]);
        }
    }
    if (validation($matrix) == 1) {
        echo "НЕКОРЕКТНЫЙ ВВОД - МАТРИЦА ДОЛЖНА БЫТЬ КВАДРАТИЧНОЙ";
    }
    else if (validation($matrix) == 2) {
        echo "НЕКОРЕКТНЫЙ ВВОД - ГРАФ ДОЛЖЕН БЫТЬ БЕЗ ПЕТЕЛЬ";
    }
    else if (validation($matrix) == 3) {
        echo "НЕККОРЕКТНЫЙ ВВОД - В МАТРИЦЕ МОГУТ БЫТЬ ТОЛЬКО ЦИФРЫ ИЛИ СИМВОЛ P";
    }
    else {
        echo "ВЫ ВВЕЛИ:<br><br>";
        echo printMatrix($matrix);
        echo "<br>МАТРИЦА ДОСТИЖИМОСТИ:<br><br>";
        echo printMatrix(floydWarshal($matrix));
    }
?>
