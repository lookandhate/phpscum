<?php
/**
 * Устанавливаю кодировку UTF-8.
 */
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<?php
include "../../../common/components/header.php"
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <title>Лабораторная работа №4</title>
</head>
<body>
<div>
    <form action="file.php" method="post" enctype="multipart/form-data">
        <h1> Вычисление кратчайшего пути графа. </h1>
        <h2>Вам необходимо ввести матрицу ориентированного графа. Если между вершинами
            нет связи, то поставьте "p". Так же на главной диагонали матрицы
            должны быть проставлены нули.</h2>
        <p><textarea cols="18" rows="6" name="matrica"></textarea></p><br>
        <div>
            Начальная вершина: <input type="text" name="first"><br>
            Конечная вершина: <input type="text" name="second"><br>
        </div>
        <input type="submit" value="Результат">
    </form>
</div>
</body>
</html>
