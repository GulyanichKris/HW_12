<?php

$a = 'Name;Surname;Age;Sex
Alexandr;Petrov;12;Male
Ivan;Ivanov;14;Male
Petro;Petrovich;20;Male
Olga;Petrovna;24;Female
Irina;Olegovich;24;Female
Anna;Khakin;10;Female
Michael;Circle;19;Male
John;Brown;39;Male';


file_put_contents('1.txt', $a);

// строку -> массив

// превращаем текст в файл
//$b = explode ("\n", $a);
//
//$male = [];
//$female = [];
//
//foreach ($b as $v) {
//    $user=explode(';', $v);
//    $x=['name' => $user[0],
//        'Surname' => $user[1],
//        'age' => $user[2],
//        'sex' => $user[3]];
//    if ($user[3] == 'Male'){
//        $male[]=$x;
//        file_put_contents('male.txt', $male);
//    }
//    elseif ($user[3] == 'Female'){
//        $female[]=$x;
//        file_put_contents('female.txt', $female);
//    }
//}

//$Na = $users[0]['name'];
//$Su = $users[0]['Surname'];
//$Ag = $users[0]['age'];
//$Se = $users[0]['sex'];

//$male = [];
//for ($i = 0; $i < count($users); $i = $i + 1) {
//    $y=[$users[$i]['name'],$users[$i]['Surname'],$users[$i]['age']];
//    if ($users[$i]['sex'] == 'Male'){
//        $male[]=$y;
//    }
//    file_put_contents('male.txt', $male);;
//}



/* // Проба выводить вручную
echo '<table border="5">';
echo '<tr>';
echo '<td> <b>' . $Na . ' </b></td>';
echo '<td> <b>' . $Su . ' </b></td>';
echo '<td> <i>' . $Ag . '</i> </td>';
echo '<td> <strike>' . $Se . ' </strike></td>';
echo '</tr>';

// Проба выводить функцией
function TrTd ($Na, $Su, $Ag, $Se){
    echo '<tr>';
    echo '<td> ' . $Na . ' </td>';
    echo '<td> ' . $Su . ' </td>';
    echo '<td> ' . $Ag . ' </td>';
    echo '<td> ' . $Se . ' </td>';
    echo '</tr>';
}

for ($i = 0; $i < count($users); $i = $i + 1) {
    $Na = $users[$i]['name'];
    $Su = $users[$i]['Surname'];
    $Ag = $users[$i]['age'];
    $Se = $users[$i]['sex'];
    if ($users[$i]['age'] > 0){
        TrTd ($Na, $Su, $Ag, $Se)
        ;
    }
}
echo '</table>'; */

// http://localhost:9090/hw8-1.php

// php -S localhost:9090 запуск сервера
