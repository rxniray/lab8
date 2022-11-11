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

    <form action="insertIntoAutoCompany.php" method="post">
        <label>Назва Авто компанії</label><br><input name="carcompanys" type="text"><br>
        <label>ID Авто компанії</label><br><input name="idcarcompany" type="text"><br>
        <label>ID Заводу</label><br><input name="idplant" type="text"><br>
        <label>ID Дилера</label><br><input name="iddealer" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>