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

<form action="deleteFormDealer.php" method="post">
        <label>ІД рядка, який видаляємо</label><br><input name="iddealer" type="text"><br>
        <input type="submit" value="Видалити рядок">
</form>

</body>
</html>