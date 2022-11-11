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
        include("showPlants.php")    
    ?>

    <form action="insertIntoPlants.php" method="post">
        <label>Назва заводу</label><br><input name="nameplant" type="text"><br>
        <label>ID заводу </label><br><input name="idplant" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
