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

    <form action="insertIntoClient.php" method="post">
        <label>ID Клієнта</label><br><input name="idclient" type="text"><br>
        <label>Ім'я</label><br><input name="namee" type="text"><br>
        <label>Призвище</label><br><input name="lastnamee" type="text"><br>
        <label>ID Машини</label><br><input name="idcar" type="text"><br>
        <label>ID Дилера</label><br><input name="iddealer" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>