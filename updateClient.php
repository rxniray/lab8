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


$sql = "UPDATE clients SET `name` ='$namee', lastname = '$lastnamee', id_car='$idcar', id_dealer = '$iddealer'  WHERE id_client ='$idclient' ";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showClients.php")
?>