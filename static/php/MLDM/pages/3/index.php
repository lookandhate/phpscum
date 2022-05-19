<!DOCTYPE html>
<html>
<?php
include "../../../common/components/header.php"
?>
    <head>
        <meta charset="UTF-8"/>
        <title>Лабораторная работа №3</title>
    </head>
    <body>
        <form onsubmit="check(); return false;">
            <h1> Функциональное отношение </h1>
            <h2>Вам необходимо ввести бинарную матрицу</h2>
            <p><textarea cols="18" rows="4" id="matrica"></textarea></p><br>
            <input type = "submit" value = "Результат">
        </form>
        <br>Результат: <span id="Result"></span>
        <script src="script.js"></script>
    </body>
</html>
