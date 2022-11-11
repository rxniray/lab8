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
    if($result = $mysqli->query('SELECT d.id_dealer ,d.name_dealer, c.id_client, c.name, c.lastname, cars.id_car, cars.mark, cars.model, cars.color FROM dealers AS d LEFT JOIN clients AS c ON d.id_client = c.id_client INNER JOIN cars ON d.id_car = cars.id_car ORDER BY d.name_dealer;')) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("<h3>Звіт - Список дилерів, клієнтів і машин: </h3><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>ID-Дилера</th><th>Назва дилера</th><th>ID-Клієнта</th><th>Ім'я</th><th>Призвище</th><th>ID-Машини</th><th>Марка</th><th>Модель</th><th>Колір</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id_dealer'], $row['name_dealer'], $row['id_client'], $row['name'], $row['lastname'], $row['id_car'], $row['mark'], $row['model'], $row['color'] ); //виводимо результат на сторінку
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
        <li><a href="showDealers.php">Таблиця Dealers</a><br></li>
        <li><a href="showClients.php">Таблиця Clients</a><br></li>
        <li><a href="showCars.php">Таблиця Cars</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
