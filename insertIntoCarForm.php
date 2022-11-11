<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showCars.php")    
    ?>

    <form action="insertIntoCar.php" method="post">
        <label>ID Машини</label><br><input name="idcar" type="text"><br>
        <label>Марка</label><br><input name="mark" type="text"><br>
        <label>Модель</label><br><input name="model" type="text"><br>
        <label>Колір</label><br><input name="color" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>