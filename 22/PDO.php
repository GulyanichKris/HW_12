<?php

$connection = new PDO('mysql:host=localhost; port=3306; dbname=MyFirstSchema', 'root','123123' );

// 1) Cделана вставка 2 записей (Используется метод exec)
//$connection->exec('INSERT INTO User(Surname, Name, Age, Sex)
//VALUES ("Iskorka","Vadim", 62, "Female"),("Koshevoj", "Oleg", 49, "Female")');

// 2) Обновлены данные у вставленной записи (Используется метод query)
//$connection->query('UPDATE User SET Name="Konstantin", Surname="Zinkin"
//                               WHERE Age=62');

// 3) Удаляем элемент (Используется метод exec)
//$connection->exec('DELETE FROM user WHERE id=13');

// Выводим список существующих данных - в виде ассоциативного и номерованного массивов.
$stm = $connection->query('SELECT * FROM user');
$stm->execute();
$list = $stm->fetchAll();

echo var_dump($list) . "\n";
// var_dump($connection->errorInfo());
echo "ok" . "\n";
