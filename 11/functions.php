<?php
// php -S localhost:9090 запуск сервера

// Дорога к файлу http://localhost:9090/form.html

//проверка поста на наличие информации
change_to_masiv($users, $name, $age, $email, $sex, $_POST){
if (count($_POST) > 0) {
    //наполняем текстовый файл, а не перезаписываем его
    $content = file_get_contents('test.txt');

    $users = explode("\n", $content);

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $sex = $_POST['sex'];

    $users[] = $name . ' ; ' . $age . ' ; ' . $email . ' ; ' . $sex;

    file_put_contents('test.txt', implode("\n", $users));
// переадресация формы на другую страницу, после заполнения формы
    header('Location: show.php?filename=test.txt');
}
}