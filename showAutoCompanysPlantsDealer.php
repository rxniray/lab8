<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця AutoCompanys</h1>


    <?php

    $mysqli = new mysqli('localhost', 'root', '', 'autocompany'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
    $mysqli->set_charset("utf8"); // Встановлюємо кодування utf8
    
    if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
    }

    /* Надсилаємо запит серверу */
    if($result = $mysqli->query('SELECT cc.idcar_company, cc.name_car_company, p.id_plant, p.name_plant, d.id_dealer, d.name_dealer FROM car_companys AS cc LEFT JOIN plants AS p ON cc.id_plant = p.id_plant INNER JOIN dealers AS d ON cc.id_dealer = d.id_dealer ORDER BY cc.name_car_company;')) {  

        printf("<h3>Звіт - Список компаній, заводів і дилерів: </h3><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>ID-компанії</th><th>Назва компанії</th><th>ID-заводу</th><th>Назва заводу</th><th>ID-дилера</th><th>Назва дилера</th></th>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['idcar_company'], $row['name_car_company'], $row['id_plant'], $row['name_plant'], $row['id_dealer'], $row['name_dealer']); //виводимо результат на сторінку
        };
        printf("</table>");
        /*Звільняємо пам'ять*/
        $result->close();
    }

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="showAutoCompanys.php">Таблиця AutoCompanys</a><br></li>
        <li><a href="showPlants.php">Таблиця Plants</a><br></li>
        <li><a href="showDealers.php">Таблиця Dealers</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
