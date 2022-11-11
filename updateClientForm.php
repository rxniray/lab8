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
        include("showClients.php")    
    ?>

<form action="updateClient.php" method="post">
        <label>ІД рядка який змінюємо</label><br><input name="idclient" type="text"><br>

        <label>Нове Ім'я клієнта</label><br><input name="namee" type="text"><br>

        <label>Нове Призвище клієнта</label><br><input name="lastnamee" type="text"><br>

        <label>Нове значення ІД Машини</label><br><input name="idcar" type="text"><br>

        <label>Нове значення ІД Дилера</label><br><input name="iddealer" type="text"><br>

        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>