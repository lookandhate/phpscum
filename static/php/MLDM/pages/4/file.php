<?php
    header("Content-Type: text/html; charset=utf-8");
    $matrix;
    $first;
    $second;
    $minLenght = 0;
    $shortS = array();
    function validation(& $matrix) {
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
    * Валидация введённых номеров начальной и конечной точки графа
    */
    function validationGraf(& $both, $size) {
        /**
        * Проверяется введенны ли графы.
        */
        if ($both == "") {
            echo "Заполните поле/я ввода!";
            exit;
        }
        /**
        * Проверка на то, является ли введенная вершина больше или меньше размера матрицы.
        */
        $both = (int)$both - 1;
        if ($both < 0 || $both >= $size) {
            echo "Вы ввели вершину(вершины), которой(которых) нет в данном графе";
            exit;
        }
    }
    /**
    * Функция по поиску кратчайшего пути в графе.
    */
    function finder($point, $length, $path){
        global $second;
        global $minLenght;
        /**
        * Проверка - не является ли просматриваемая в данный момент вершина конечной.
        */
        if ($point == $second){
            /**
            * Если это так, то функция прекращает свою работу и выводит получившийся путь
            */
            if ($minLenght == 0 || $length < $minLenght) {
                global $shortS;
                $minLenght = $length;
                if ($length == 0) {
                    $path[] = $point;
                }
                $shortS = $path;
            }
        }
        /**
        * В противном случае, вычисляем кратчайший путь с использованием рекурсии.
        * in_array — Проверяет, присутствует ли в массиве значение
        */
        else {
            global $matrix;
            for ($i = 0; $i < count($matrix[$point]); $i++) {
                if ($matrix[$point][$i] !== 0 && $matrix[$point][$i] !== "p") {
                    if ($minLenght == 0 || $length + $matrix[$point][$i] < $minLenght) {
                        if (!in_array($i, $path)) {
                            if ($path[count($path) - 1] == $point) {
                                $path[] = $i;
                            }
                            else {
                                $path[count($path) - 1] = $i;
                            }
                            finder($i, $length + $matrix[$point][$i], $path);
                        }
                    }
                }
            }
        }
    }
    /**
    * Здесь мы берем значения, введенные пользователем, и создаём по ним двумерный масссив
    * с которым будет удобно работать. После чего вызываем все функции и производим валидацию.
    * Метод "explode" разбивает строку с помощью разделителя
    */
    $matrix = explode(PHP_EOL, $_POST["matrica"]);
    for ($i = 0; $i < count($matrix); $i++) {
        $matrix[$i] = explode(" ", $matrix[$i]);
    }
    $first = $_POST["first"];
    $second = $_POST["second"];
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
        validationGraf($first, count($matrix));
        validationGraf($second, count($matrix));
        finder($first, 0, $path = array($first));
        if ($minLenght == 0 && $first != $second) {
            echo "Путь из вершины " . ($first + 1) . " в вершину " . ($second + 1) . " не найден.";
        }
        else {
            echo "Длина кратчайшего пути из вершины " . ($first + 1) . " в вершину " . ($second + 1) . " равна " . $minLenght . "<br>";
            echo "Кратчайший путь ";
            for ($i = 0; $i < count($shortS) - 1; $i++) {
                echo ($shortS[$i] + 1) . " - ";
            }
            echo $shortS[count($shortS) - 1] + 1;
        }
    }
?>
