<?php

$mysqli = new mysqli('localhost', 'root', '', 'autocompany'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$carcompanys = $_POST['carcompanys']; $idcarcompany = $_POST['idcarcompany']; $idplant = $_POST['idplant']; $iddealer = $_POST['iddealer'];

$sql = "INSERT INTO car_companys (name_car_company, idcar_company, id_plant ,id_dealer) VALUES ('$carcompanys', '$idcarcompany', '$idplant', '$iddealer' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showAutoCompanys.php")
?>
