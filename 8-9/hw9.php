
<?php

if(array_key_exists('filename', $_GET))
{
$filename = $_GET['filename'];

$s = file_get_contents($filename);

$a = explode ("\n", $s);

$users = [];

foreach ($a as $v){
//    проверка на пустую строку
    if (strlen($v) > 0){
        $user=explode(';', $v);
        $users[]=$user;
    }
}
//рисуем таблицу из пользователей
echo '<table border="3">';
foreach ($users as $v) {
echo '<tr>';
echo '<td>' . $v[0] . '</td>';
echo '<td>' . $v[1] . '</td>';
echo '</tr>';
}

echo '</table>';
}
echo '<a href="show.html.php"> ~Back Home </a>';