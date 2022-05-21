<html>
<head>
    <?php
    include "../../../common/components/header.php"
    ?>
    <script type="text/javascript" src="script.js"></script>
    <title>Лабораторная работа 3</title>
</head>
<body>
<h1>Лабораторная работа №3</h1><br>
Первое множество: <label for="set1"></label><input class="form-control input-field" type="text" id="set1"<br><br>
Второе множество: <label for="set2"></label><input class="form-control input-field" type="text" id="set2"><br><br>
Отношение : <label for="relation"></label><input class="form-control input-field" type="text" id="relation"<br><br>
<button type="button" class="btn btn-primary button-style" onclick="calculate()">Проверить</button>
<p id="output"></p>
</body>
</html>
