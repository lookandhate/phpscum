<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Моя 1 лаба</title>
    <script type = "text/javascript" src = "../js/lab1.js"></script>
    <!-- <script type = "text/javascript" src = "/scripts/DarkLight.js"></script> -->
</head>
<body>
<h1>Л/р №1</h1>


<form method="" action="">
    <table>
        <tr>
            <td> Введите элементы 1 массива </td>
            <td> <input type = "text" id = "first_array" value = "" size = "150" /><br> </td>
        </tr>
        <tr>
            <td> Введите элементы 2 массива </td>
            <td> <input type = "text" id = "second_array" value = "" size = "150" /><br> </td>
        </tr>
        <!-- <tr>
            <td> Введите матрицу</td>
            <td> <textarea id = "mass3" value = ""> Тут вводится матрица </textarea> <br> </td>
        </tr> -->
        <tr><td colspan="2"> <input type="button" value = "Merge sets" onclick = "merge_sets();"> </td></tr>
        <tr><td colspan="2"> <input type="button" value = "Intersect sets" onclick = "intersect_sets();"> </td></tr>
        <tr><td colspan="2"> <input type="button" value = "Symmetric differece of 2 sets" onclick = "symmetric_difference();"> </td></tr>
        <tr><td colspan="2"> <input type="button" value = "Differece of A/B" onclick = "difference_a_on_b();"> </td></tr>
        <tr><td colspan="2"> <input type="button" value = "Differece of B/A" onclick = "difference_b_on_a();"> </td></tr>
        <!-- <tr>
            <td> <input type="button" value = "Смена темы" onclick = "ChangeTheme();"> </td>
        </tr> -->
        <tr>
            <td colspan="2"> <p id="output"></p> </td>
        </tr>
    </table>
</form>

<div id = "outResult"> </div>

</body>
</html>