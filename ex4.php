<?php

declare(strict_types=1);

/* EXERCISE 4
  Copy the code of exercise 2 to here and delete everything related to cola.
  Make all properties protected.
  Make all the other prints work without error without changing the beverage class.

  USE TYPE HINTING EVERYWHERE!
*/

class Beverage
{
  protected $temperature, $color, $price;

  public function __construct(string $color, float $price, string $temperature = "cold")
  {
    $this->temperature = $temperature;
    $this->color = $color;
    $this->price = $price;
  }

  // GETTERS
  public function getInfo(): string
  {
    return "The temperature is " . $this->temperature . " and the color is " . $this->color . ".";
  }
}

class Beer extends Beverage
{
  protected $name, $alcohol_percentage;

  public function __construct(string $name, float $alcohol_percentage, string $color, float $price, string $temperature = "cold")
  {

    $this->temperature = $temperature;
    $this->color = $color;
    $this->price = $price;
    $this->name = $name;
    $this->alcohol_percentage = $alcohol_percentage;
  }

  // GETTERS
  public function getAlcoholpercentage(): string
  {
    return 'The alcohol percentage is: ' . $this->alcohol_percentage . ' %';
  }
  public function getAlcohol_percentage(): float
  {
    return $this->alcohol_percentage;
  }
  public function getColor(): string
  {
    return $this->color;
  }

  // SETTERS
  public function setColor(string $color): void
  {
    $this->color = $color;
  }

  // METHODS
  public function beerInfo(): string
  {
    return 'Hi i\'m ' . $this->name . ' and have an alcohol percentage of ' . $this->alcohol_percentage . '% and I have a ' . $this->color . ' color.';
  }
}

// INSTANTIATION
$duvel = new Beer('Duvel', 8.5, 'Blond', 3.5);

// ECHOES
echo $duvel->getAlcohol_percentage() . '<br/>';
echo '<br/>';
echo $duvel->getAlcoholpercentage() . '<br/>';
echo '<br/>';
echo $duvel->getColor() . '<br/>';
echo '<br/>';
echo $duvel->setColor('Light');
echo $duvel->getColor() . '<br/>';
echo '<br/>';
echo $duvel->getInfo() . '<br/>';
echo '<br/>';
echo $duvel->beerInfo() . '<br/>';
echo '<br/>';
