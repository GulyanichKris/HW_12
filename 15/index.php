<?php

/* Сделайте класс User,
в котором будут следующие
protected поля - name (имя), age (возраст),
public методы setName, getName, setAge, getAge.*/
class User {

    protected $name;
    protected $age;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
}
/* Сделайте класс Worker, который наследует от класса User
и вносит дополнительное private поле salary (зарплата),
а также методы public getSalary и setSalary.*/

class Worker extends User {

    private $salary;

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
}

/*Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. */

$Ivan = new Worker();
$Ivan-> setName('Ivan');
$Ivan-> setAge('25');
$Ivan->setSalary('1000');

//Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000.

$Vasyl = new Worker();
$Vasyl-> setName('Vasyl');
$Vasyl-> setAge('26');
$Vasyl->setSalary('2000');

//Найдите сумму зарплата Ивана и Васи.

$a = $Ivan->getSalary();
$b = $Vasyl->getSalary();
$c = $a+$b;

echo 'SumSalary: ' . $c . "\n";

/*Сделайте класс Student, который наследует от класса User
и вносит дополнительные private поля стипендия, курс,
а также геттеры и сеттеры для них. */
class Student extends User{

    private $scholarship;
    private $year;

    /**
     * @return mixed
     */
    public function getScholarship()
    {
        return $this->scholarship;
    }

    /**
     * @param mixed $scholarship
     */
    public function setScholarship($scholarship): void
    {
        $this->scholarship = $scholarship;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }
}

/* Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи.
Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C). */

class Driver extends Worker{
    private $DrivingExp;
    private $DrCategory;

    /**
     * @return mixed
     */
    public function getDrCategory()
    {
        return $this->DrCategory;
    }

    /**
     * @param mixed $DrCategory
     */
    public function setDrCategory($DrCategory): void
    {
        $this->DrCategory = $DrCategory;
    }

    /**
     * @param mixed $DrivingExp
     */
    public function setDrivingExp($DrivingExp): void
    {
        $this->DrivingExp = $DrivingExp;
    }

    /**
     * @return mixed
     */
    public function getDrivingExp()
    {
        return $this->DrivingExp;
    }

}