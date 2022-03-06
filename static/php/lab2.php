<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <title>Лабораторная работа 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../styles/lab1.css" rel="stylesheet">
    <script type = "text/javascript" src = "../js/lab2.js"></script>
</head>
<body>
<h1>Лабораторная работа №2</h1>
<form method = "" action="">
    <table>
        <tr>
            <td>Input matrix</td>
            <td><label for="matrix"></label><textarea id="matrix" value ="" size ="100"></textarea></td>
        </tr>
        <tr>
            <td colspan = "2" ><input type = "button" value="Calculate!" onclick="check_matrix();"/></td>
        </tr>
    </table>
</form>

<div id ="full-result">
    <p id="result"></p>
</div>

</body>

</html>
