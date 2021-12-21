<?php

namespace Gulyanich;

abstract class Figure {

    abstract public function getSquare ();
    abstract public function getPerimeter ();
    abstract  public function getRatio ();
}

class Rectangles extends Figure {

    public function __construct($a,$b){
        $this->side1 = $a;
        $this->side2 = $b;
    }

    public function getSquare (){
        $squareRectangle = ($this->side1)*($this->side2);
        return $squareRectangle;
    }

    public function getPerimeter (){
        $perimRectangle = (($this->side1)+($this->side2))*2;
        return $perimRectangle;
    }

    public function getRatio()
    {
        $Ratio = $this->getPerimeter()/$this->getSquare();
        return $Ratio;
    }
}

$Rectangle1 = new Rectangles(2,3);

echo 'Площадь прямоугольника: ' . $Rectangle1->getSquare() . "\n";
echo 'Периметр прямоугольника: ' . $Rectangle1->getPerimeter() . "\n";
echo 'Отношение площади к периметру прямоугольника: ' . $Rectangle1->getRatio() . "\n";

class Quadrates extends Figure {

    public function __construct($a){
        $this->side1 = $a;
    }
    public function getSquare (){
        $squareQuadrate = ($this->side1)*($this->side1);
        return $squareQuadrate;
    }
    public function getPerimeter (){
        $perimQuad = ($this->side1)*4;
        return $perimQuad;
    }
    public function getRatio()
    {
        $Ratio = $this->getPerimeter()/$this->getSquare();
        return $Ratio;
    }
}

$Quadrates1 = new Quadrates(8);

echo 'Площадь квадрата: ' . $Quadrates1->getSquare() . "\n";
echo 'Периметр квадрата: ' . $Quadrates1->getPerimeter() . "\n";
echo 'Отношение площади к периметру квадрата: ' . $Quadrates1->getRatio() . "\n";

class Circle extends Figure {

    public function __construct($a){
        $this->radius1 = $a;
    }

    public function getSquare (){
        $squareCircle = M_PI*(($this->radius1)**2);
        return $squareCircle;
    }
    public function getPerimeter (){
        $perimCircle=2*($this->radius1)*M_PI;
        return $perimCircle;
    }
    public function getRatio()
    {
        $Ratio = $this->getPerimeter()/$this->getSquare();
        return $Ratio;
    }
}

$Circle1= new Circle(5);

echo 'Площадь круга: ' . $Circle1->getSquare() . "\n";
echo 'Периметр круга: ' . $Circle1->getPerimeter() . "\n";
echo 'Отношение площади к периметру круга: ' . $Circle1->getRatio() . "\n";
