<?php

class MenuItem{

    public $name;
    public $price;
    public $size;
}

$sandwich = new MenuItem();

$sandwich ->name = 'Pork-Sandwich';
$sandwich ->price = 138;
$sandwich ->size = '435 gm';

$salad = new MenuItem();

$salad ->name = 'Veggie Salad';
$salad ->price = 98;
$salad ->size = '380 gm';

$drink = new MenuItem();

$drink ->name = 'Tea';
$drink ->price = 33;
$drink ->size = '300 ml';

echo str_repeat("-", 16) . "\n";
echo 'MenuItem: ' . $sandwich ->name . "\n" . 'Price: ' . $sandwich ->price ."\n" . 'Size: ' . $sandwich ->size . "\n";
echo str_repeat("-", 16) . "\n";
echo 'MenuItem: ' . $salad ->name . "\n" . 'Price: ' . $salad ->price ."\n" . 'Size: ' . $salad ->size . "\n";
echo str_repeat("-", 16) . "\n";
echo 'MenuItem: ' . $drink ->name . "\n" . 'Price: ' . $drink ->price ."\n" . 'Size: ' . $drink ->size . "\n";
echo str_repeat("-", 16) . "\n";