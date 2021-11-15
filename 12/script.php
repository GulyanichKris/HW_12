<?php

if (array_key_exists('download', $_FILES) && $_FILES['download']['error'] == 0) {

    if ($_FILES['download']['type'] == 'text/plain') {
        move_uploaded_file($_FILES['download']['tmp_name'], $_FILES['download']['name']);

        if (count($_POST) > 0) {
            //наполняем текстовый файл, а не перезаписываем его
            $content = file_get_contents($_FILES['download']['name']);

            $a = explode("\n", $content);

            $users = [];

            foreach ($a as $v){
//    проверка на пустую строку
                if (strlen($v) > 0){
                    $user=explode(';', $v);
                    $users[]=$user;
                }
            }
        } else {
            echo 'Invalid file';
        }
    }
}
//отображаем содержимое файла в виде таблицы
include 'show.html.php';