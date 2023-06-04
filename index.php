<?php
require "dbconnect.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<h1>Варавина Светлана гр. 609-21з</h1>

<?php
echo "<h2>Что-то</h2>";

$result = $conn->query("SELECT * FROM info_for_hostes");

while ($row = $result->fetch()){
    ?>
    <div class="item">
        <div class="rows">
            <?=$row['id']?>
            <?=$row['restor']?>
            <?=$row['id_visitor']?>
            <?=$row['id_стола']?>
            <?=$row['date_time']?>
            <?=$row['ID_color']?>
    </div>
    <?php

}
?>

</body>
</html>
