<?php

declare(strict_types=1);

include 'ex1.php';

class Beer extends Beverage
{
  public $name, $alcohol_percentage;

  public function __construct(string $name, float $alcohol_percentage, string $color, float $price, string $temperature = "cold")
  {

    $this->temperature = $temperature;
    $this->color = $color;
    $this->price = $price;
    $this->name = $name;
    $this->alcohol_percentage = $alcohol_percentage;
  }

  public function getAlcoholpercentage(): string
  {
    return 'The alcohol percentage is: ' . $this->alcohol_percentage . ' %';
  }
}

$duvel = new Beer('Duvel', 8.5, 'Blond', 3.5);
$fanta = new Beverage('Brown', 2.5, 'hot');

echo $duvel->alcohol_percentage . '<br/>';
echo $duvel->getAlcoholpercentage() . '<br/>';
echo $duvel->color . '<br/>';
echo '<br/>';
echo $duvel->getInfo() . '<br/>';
echo '<br/>';
echo '<br/>';
echo $fanta->getAlcoholpercentage() . '<br/>';
