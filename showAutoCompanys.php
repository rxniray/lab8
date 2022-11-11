<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця AutoCompanys</title>
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
    if($result = $mysqli->query('SELECT * FROM car_companys ORDER BY name_car_company')) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("Список Авто компаній: <br><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>ID</th><th>Назва компанії</th><th>ІД Заводу</th><th>ІД Дилера</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['idcar_company'], $row['name_car_company'], $row['id_plant'], $row['id_dealer']); //виводимо результат на сторінку
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
        <li><a href="insertIntoAutoCompanyForm.php">Вставити рядок</a><br></li>


        <li><a href="updateAutoCompanyForm.php">Змінити рядок</a><br></li>


        <li><a href="deleteFormAutoCompanyForm.php">Видалити рядок</a><br></li>

        <br>

        <li><a href="showAutoCompanysPlantsDealer.php">Звіт Авто компанії - Заводи - Дилери</a><br></li>

        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>