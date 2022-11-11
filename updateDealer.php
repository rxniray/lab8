<?php

$mysqli = new mysqli('localhost', 'root', '', 'autocompany'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$iddealer = $_POST['iddealer'];
$namedealer = $_POST['namedealer']; 
$idcar = $_POST['idcar']; 
$idclient = $_POST['idclient'];


$sql = "UPDATE dealers SET name_dealer='$namedealer', id_car='$idcar' , id_client = '$idclient' WHERE id_dealer= '$iddealer' ";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showDealers.php")
?>