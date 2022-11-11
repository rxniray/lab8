<?php

$mysqli = new mysqli('localhost', 'root', '', 'autocompany'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$idclient = $_POST['idclient'];
$namee = $_POST['namee']; 
$lastnamee = $_POST['lastnamee'];
$idcar = $_POST['idcar'];
$iddealer = $_POST['iddealer'];

$sql = "INSERT INTO clients (id_client, `name`, lastname , id_car, id_dealer) VALUES ('$idclient', '$namee', '$lastnamee', '$idcar', '$iddealer' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showClients.php")
?>