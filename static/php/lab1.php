<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actions on sets</title>
    <script type="text/javascript" src="../js/lab1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../styles/lab1.css" rel="stylesheet">

</head>
<body>
<?php
include "header.php"
?>

<h1>Л/р №1</h1>


<form method="" action="">
    <div class="form-group">
        <label for="first_array">First set</label>
        <input type="text" class="form-control input-field" id="first_array" placeholder="Input first set"
               size="30%"/><br>
    </div>

    <div class="form-group">
        <label for="second_array">Second set</label>
        <input type="text" class="form-control input-field" id="second_array" placeholder="Input second set"/><br>
    </div>

    <div class="btn-group-vertical">
        <input type="button" class="btn btn-primary button-style" value="Merge sets" onclick="merge_sets();">
        <input type="button" class="btn btn-primary button-style" value="Intersect sets" onclick="intersect_sets();">
        <input type="button" class="btn btn-primary button-style" value="Symmetric difference of 2 sets"
               onclick="symmetric_difference();">
        <input type="button" class="btn btn-primary button-style" value="Difference of A/B"
               onclick="difference_a_on_b();">
        <input type="button" class="btn btn-primary button-style" value="Difference of B/A"
               onclick="difference_b_on_a();">
    </div>
</form>
</body>
</html>