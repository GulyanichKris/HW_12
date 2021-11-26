<?php

// Допустим, для примера это класс User, со свойствами имя и возраст.

class User {

public $name;
public $age;
}

// Напиши второй класс, назови его Builder (строитель).
//3.Создай в нем метод, который будет принимать в качестве аргументов имя и возраст,
//будет создавать нового пользователя, и возвращать его.

class Builder {
//    4.Создай в своем "строителе" статическое свойство,
//которое будет хранить количество созданных пользователей,
//и увеличивай каждый раз на единицу (привет инкремент!) в методе,
//который будет создавать пользователя.
    public  static $Count = 0;

    public static function NewUser($name, $age) {

        $a = new User();
        $a -> name = $name;
        $a -> age = $age;

        Builder::$Count++;

        return $a;

    }
}

$Us1 = Builder::NewUser('Pirozhok', 33);
$Us2 = Builder::NewUser('Bulochka', 45);
$Us3 = Builder::NewUser('Ivan', 12);
$Us4 = Builder::NewUser('Zigmund', 56);
$Us5 = Builder::NewUser('Ishtvan', 98);

//var_dump($Us1, $Us2, $Us3, $Us4, $Us5);

echo 'Number of Users in Builder: ' . Builder::$Count . "\n";