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

<form action="updateCar.php" method="post">
        <label>ІД рядка який змінюємо</label><br><input name="idcar" type="text"><br>

        <label>Нове значення Марки</label><br><input name="mark" type="text"><br>

        <label>Нове значення Моделі</label><br><input name="model" type="text"><br>

        <label>Новий Кольору</label><br><input name="color" type="text"><br>

        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>