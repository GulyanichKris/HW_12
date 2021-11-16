<?php

//http://localhost:9090/form.html
//проверка поста на наличие информации
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

include "save.html.php";

//echo '<a href="save.html.php"> ~Great Job! Back to Form </a>';
//echo '<br/>';
//echo '<a href="http://localhost:9090/data.php?filename=test.txt"> ~ALL USERS </a>';


//echo '<pre>';
//var_dump($_POST);

//echo '<table border="3">';
//
//foreach ($users as $v) {
//    echo '<tr>';
//    echo '<td>' . $v[0] . '</td>';
//    echo '<td>' . $v[1] . '</td>';
//    echo '<td>' . $v[2] . '</td>';
//    echo '<td>' . $v[3] . '</td>';
//    echo '</tr>';
//}
//    echo '</table>';}
