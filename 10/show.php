<?php
$filename='test.txt';

//проверка на пустую строку
if(array_key_exists('filename', $_GET)) {
    $filename = $_GET['filename'];
    $s = file_get_contents($filename);
    $a = explode("\n", $s);
    $users = [];

    foreach ($a as $v) {
        if (strlen($v) > 0) {
            $user = explode(';', $v);
            $users[] = $user;
        }
    }
}

include 'show.html.php';