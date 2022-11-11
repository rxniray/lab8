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
        include("showAutoCompanys.php")    
    ?>

<form action="updateAutoCompany.php" method="post">
        <label>ІД рядка який змінюємо</label><br><input name="idcarcompany" type="text"><br>

        <label>Нове ім'я компаніх</label><br><input name="carcompanys" type="text"><br>

        <label>Нове значення ІД Дилера</label><br><input name="iddealer" type="text"><br>

        <label>Нове значення ІД Завода</label><br><input name="idplant" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>