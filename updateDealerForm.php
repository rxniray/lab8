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
        include("showDealers.php")    
    ?>

<form action="updateDealer.php" method="post">
        <label>ІД рядка який змінюємо</label><br><input name="iddealer" type="text"><br>

        <label>Нове ім'я Дилера</label><br><input name="namedealer" type="text"><br>

        <label>Нове значення ІД Машини</label><br><input name="idcar" type="text"><br>

        <label>Нове значення ІД Клієнта</label><br><input name="idclient" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>