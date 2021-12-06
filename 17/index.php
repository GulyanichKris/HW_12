<?php

class MenuItem{

    protected $name;
    protected $price;
    protected $size;

    public function __construct($name, $price, $size)
    {
        $this -> name = $name;
        $this -> price = $price;
        $this -> size = $size;

        echo 'start process:' . "\n";
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    public function __destruct(){
        echo 'this is the end. Goodbye my friend' . "\n";
    }

//    public function __toString(){
//        return 'Can you imagine?';
//    }

    public function __toString(){
        return $this->name;
    }
}

$sandwich = new MenuItem('Pork-Sandwich', 138, '435 gm');

echo $sandwich->getName() . ', ' . $sandwich->getPrice() . ', ' . $sandwich->getSize() . "\n";

$salad = new MenuItem('Veggie Salad', 98, '380 gm');

echo $salad->getName() . ', ' . $salad->getPrice() . ', ' . $salad->getSize() . "\n";

echo $sandwich . "\n";

echo $salad . "\n";





















//$sandwich ->name = 'Pork-Sandwich';
//$sandwich ->price = 138;
//$sandwich ->size = '435 gm';
//
//$salad = new MenuItem();
//
//$salad ->name = 'Veggie Salad';
//$salad ->price = 98;
//$salad ->size = '380 gm';
//
//$drink = new MenuItem();
//
//$drink ->name = 'Tea';
//$drink ->price = 33;
//$drink ->size = '300 ml';
//
//echo str_repeat("-", 16) . "\n";
//echo 'MenuItem: ' . $sandwich ->name . "\n" . 'Price: ' . $sandwich ->price ."\n" . 'Size: ' . $sandwich ->size . "\n";
//echo str_repeat("-", 16) . "\n";
//echo 'MenuItem: ' . $salad ->name . "\n" . 'Price: ' . $salad ->price ."\n" . 'Size: ' . $salad ->size . "\n";
//echo str_repeat("-", 16) . "\n";
//echo 'MenuItem: ' . $drink ->name . "\n" . 'Price: ' . $drink ->price ."\n" . 'Size: ' . $drink ->size . "\n";
//echo str_repeat("-", 16) . "\n";