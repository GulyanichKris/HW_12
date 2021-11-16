<?php

class MenuItem{

    public $name;
    public $price;
    public $size;
}

$sandwich = new MenuItem();

$sandwich ->name = 'Pork';
$sandwich ->price = 138;
$sandwich ->size = '435 gm';

$salad = new MenuItem();

$salad ->name = 'Veggie';
$salad ->price = 98;
$salad ->size = '380 gm';

$drink = new MenuItem();

$drink ->name = 'Tea';
$drink ->price = 33;
$drink ->size = '300 ml';

echo 'MenuItem :' . $sandwich ->name . 'Price : ' . $sandwich ->price . 'Size : ' . $salad ->size . "\n";
