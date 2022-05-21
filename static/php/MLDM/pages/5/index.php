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
    <meta charset="UTF-8">
    <title>Lab №5</title>
</head>
<body>
<div>
    <form action="file.php" method="post" enctype="multipart/form-data">
        <h1> Нахождение матрицы достижимости </h1>
        <h2>Вам необходимо ввести матрицу графа. На главной диагонали матрицы
            должны быть проставлены нули.</h2>
        <p><textarea cols="18" class="form-control input-field" rows="6" name="matrica"></textarea></p><br>
        <input type="submit" value="Result" class="btn btn-primary button-style" name="result">
    </form>
</div>
</body>
</html>
